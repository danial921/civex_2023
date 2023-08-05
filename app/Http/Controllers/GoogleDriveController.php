<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;

class GoogleDriveController extends Controller
{
    public function uploadImageToDrive($namaTim, $file)
    {
        // Mendapatkan path client secret dari environment
        // $clientSecretPath = env('GOOGLE_CLIENT_SECRET');

        // Inisialisasi klien Google Drive
        $client = new Google_Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->addScope(Google_Service_Drive::DRIVE);
        $client->setAccessType('offline');

        // Membuat koneksi ke Google Drive
        $service = new Google_Service_Drive($client);

        // Mendapatkan folder path dari parameter
        $folderPath = 'laravel/' . $namaTim;

        // Mendapatkan nama file
        $fileName = $file->getClientOriginalName();

        // Mengupload file ke Google Drive
        $driveFile = new Google_Service_Drive_DriveFile([
            'name' => $fileName,
            'parents' => [$this->createFolderIfNotExists($service, $folderPath)],
        ]);
        $fileContent = file_get_contents($file->getRealPath());
        $createdFile = $service->files->create($driveFile, [
            'data' => $fileContent,
            'mimeType' => $file->getClientMimeType(),
            'uploadType' => 'multipart',
        ]);

        // Mengembalikan link file dari Google Drive
        return $createdFile->getWebViewLink();
    }

    private function createFolderIfNotExists($service, $folderPath)
    {
        $folderId = null;
        $folderNames = explode('/', $folderPath);
        foreach ($folderNames as $folderName) {
            $folderId = $this->getFolderId($service, $folderName, $folderId);
        }
        return $folderId;
    }

    private function getFolderId($service, $folderName, $parentFolderId = null)
    {
        $folderId = null;

        $params = [
            'q' => "name='$folderName' and mimeType='application/vnd.google-apps.folder'",
            'spaces' => 'drive',
        ];
        if ($parentFolderId) {
            $params['q'] .= " and '$parentFolderId' in parents";
        }

        $results = $service->files->listFiles($params);
        foreach ($results as $file) {
            $folderId = $file->getId();
        }

        if (!$folderId) {
            // Jika folder tidak ada, buat folder baru
            $folderMetadata = new Google_Service_Drive_DriveFile([
                'name' => $folderName,
                'mimeType' => 'application/vnd.google-apps.folder',
            ]);
            if ($parentFolderId) {
                $folderMetadata->setParents([$parentFolderId]);
            }
            $folder = $service->files->create($folderMetadata, [
                'fields' => 'id',
            ]);
            $folderId = $folder->getId();
        }

        return $folderId;
    }
}