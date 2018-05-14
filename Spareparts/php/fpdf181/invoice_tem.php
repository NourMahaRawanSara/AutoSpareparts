<?php

require_once "fpdf.php";
//define('FPDF_FONTPATH', '/opt/lampp/htdocs/eye_center/fpdf/font/');

class invoice extends FPDF {

    private $head;
    private $split;
    private $body;
    private $table_header = array();
    private $table_body = array();
    private $date;
    private $counter = 0;
    private $word = "";
    private $fpdf;
    private $ar_size = 0;
    private $body_size = 0;

    public function __construct($head, $body, $split) {
        $this->head = $head;
        $this->body = $body;
        $this->split = $split;
        $this->date = "Printed on:" . date("d/m/Y");

        $this->fpdf = new fpdf('p', 'mm', 'A4');

        $this->fpdf->AddPage();
        $this->drawlogo();
        $this->draw_head();
        $this->draw_body();
    }

    function drawlogo() {


        $this->fpdf->Image('http://localhost/eye_center/images/eye.png', 10, 10);
        $this->fpdf->SetFont('Courier', 'I', 10);
        $this->fpdf->SetTextColor(123, 120, 90);

        $this->fpdf->Ln(5);
        $this->fpdf->SetX(35);
        $this->fpdf->Cell(50, 5, "Mobile: 01000670562 01000670498", "I");
        $this->fpdf->Ln(5);
        $this->fpdf->SetX(35);
        $this->fpdf->Cell(50, 5, "Address:", "I");
        $this->fpdf->SetX(150);
        $this->fpdf->SetTextColor(0, 0, 0);

        $this->fpdf->Cell(50, 5, $this->date, "I");
        $this->fpdf->Ln(25);

        $this->fpdf->SetTextColor(0, 0, 0);
        $this->fpdf->SetX(65);
        $this->fpdf->SetFont('Courier', 'B', 25);
        $this->fpdf->Cell(50, 5, "Invoice", "I");
        $this->fpdf->Ln(8);
        $this->fpdf->SetTextColor(0, 0, 0);
        $this->fpdf->SetFont('Arial', 'B', 12);
    }

    public function draw_head() {



        while ($this->counter < strlen($this->head)) {
            if (strcmp($this->head[$this->counter], $this->split)) {
                $this->word.=$this->head[$this->counter];
            } else {

                array_push($this->table_header, $this->word);
                $this->word = "";
            }



            $this->counter++;
        }




        $this->ar_size = count($this->table_header);



        for ($i = 0; $i < $this->ar_size; $i++) {
            if ($i + 1 == $this->ar_size) {

                $this->fpdf->Cell('40', '10', $this->table_header[$i], 1, 1);
            } else {
                $this->fpdf->Cell('40', '10', $this->table_header[$i], 1);
            }
        }
    }

    public function draw_body() {
        $this->counter = 0;
        while ($this->counter < strlen($this->body)) {
            if (strcmp($this->body[$this->counter], $this->split)) {
                $this->word.=$this->body[$this->counter];
            } else {

                array_push($this->table_body, $this->word);
                $this->word = "";
            }



            $this->counter++;




            $this->body_size = count($this->table_body);
        }



        $this->fpdf->SetFont('Arial', 'B', 10);
        $this->counter = 0;
        for ($i = 0; $i < $this->body_size; $i++) {
            if ($this->counter != $this->ar_size - 1) {
                $this->fpdf->Cell('40', '10', $this->table_body[$i], 1);
            } else {

                $this->fpdf->Cell('40', '10', $this->table_body[$i], 1, 1);
            }$this->counter++;
        }
    }

    public function ret() {

        return $this->fpdf->Output('/opt/xampp/htdocs/eye_center/invoice.pdf', 'F');
    }

}