<?php

function vite($entry) {
    $devServer = 'http://localhost:5173';
    $isDev = false;

    // Check if dev server is running
    $handle = @fsockopen('localhost', 5173, $errno, $errstr, 0.1);
    if ($handle) {
        $isDev = true;
        fclose($handle);
    }

    if ($isDev) {
        // Dev mode: point to dev server
        echo '<script type="module" src="' . $devServer . '/@vite/client"></script>';
        echo '<script type="module" src="' . $devServer . '/' . $entry . '"></script>';
    } else {
        // Production mode: read manifest
        $manifestPath = __DIR__ . '/../dist/.vite/manifest.json';
        if (!file_exists($manifestPath)) {
            // Fallback for older vite versions or different config
            $manifestPath = __DIR__ . '/../dist/manifest.json';
        }

        if (file_exists($manifestPath)) {
            $manifest = json_decode(file_get_contents($manifestPath), true);
            // Vite manifest keys are relative to root, e.g., "src/css/app.css"
            if (isset($manifest[$entry])) {
                $file = $manifest[$entry]['file'];
                echo '<link rel="stylesheet" href="/dist/' . $file . '">';
                // If there were JS imports, they would be handled here too
            } else {
               echo "<!-- Vite asset '$entry' not found in manifest -->";
            }
        } else {
            echo "<!-- Vite manifest not found. Run 'npm run build' -->";
        }
    }
}
