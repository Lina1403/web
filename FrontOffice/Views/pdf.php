<?php
require_once('tcpdf/tcpdf.php'); // Include the TCPDF library

if (isset($_GET['quiz_id'])) {
    // Create a new PDF document
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

    // Set document information
    $pdf->SetCreator('Your Name');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Quiz Information PDF');
    $pdf->SetSubject('Quiz Information');
    $pdf->SetKeywords('Quiz, Information, PDF');

    // Add a page to the PDF
    $pdf->AddPage();

    // Fetch quiz information from the database based on the quiz_id
    $con = new PDO('mysql:host=localhost;dbname=gestion_des_cours', 'root', '');
    $quiz_id = $_GET['quiz_id'];
    $stmt = $con->prepare("SELECT * FROM quiz WHERE id = ?");
    $stmt->execute([$quiz_id]);
    $quizInfo = $stmt->fetch();

    if ($quizInfo) {
        // Add quiz information to the PDF
        $pdf->SetFont('times', '', 12);
        $pdf->Cell(0, 10, 'Quiz Name: ' . $quizInfo["titre"], 0, 1);
        $pdf->Cell(0, 10, 'Questions: ' . $quizInfo["questions"], 0, 1);
        $pdf->Cell(0, 10, 'Duration: 10.00 Hrs', 0, 1);
        $pdf->Cell(0, 10, 'Quiz for Course: ' . $quizInfo["id_cours"], 0, 1);
        $pdf->Cell(0, 10, 'Language: English', 0, 1);
        $pdf->Cell(0, 10, 'Rating: 4.5 (250)', 0, 1);
    }

    // Output the PDF as a download
    $pdf->Output('quiz_information.pdf', 'D');
} else {
    echo 'Invalid quiz ID.';
}
?>
