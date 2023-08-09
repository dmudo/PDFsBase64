<?php

function mergeBase64PDFs($base64_pdf1, $base64_pdf2) {
    // Decode as strings base64 para dados binários
    $pdf1_data = base64_decode($base64_pdf1);
    $pdf2_data = base64_decode($base64_pdf2);
    
    // Concatenate os dados binários
    $merged_data = $pdf1_data . $pdf2_data;
    
    // Codifique os dados binários mesclados de volta para base64
    $merged_base64 = base64_encode($merged_data);
    
    return $merged_base64;
}

// Exemplo de strings PDF codificadas em base64
$base64_pdf1 = "...";
$base64_pdf2 = "...";

$merged_base64_pdf = mergeBase64PDFs($base64_pdf1, $base64_pdf2);
echo $merged_base64_pdf;

?>