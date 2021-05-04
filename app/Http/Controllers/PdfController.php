<?php

namespace App\Http\Controllers;

use App\Services\PdfService;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use PDF;


/**
 * Class to manage the generation of PDF files
 *
 * @author Eliezer Alves
 * @since 23/2021
 *
 */
class PdfController extends Controller
{
    public function __construct(PdfService $service)
    {
        parent::__construct($service);
    }


    /**
     * Displays pdf of PJ client contracts
     *
     * @param int $idProposta
     * @return \Illuminate\View\View
     */
    public function contratoPj($idProposta)
    {
        $dadosProposta = $this->service->contratoPj($idProposta);
        // return view('pdf.ccb-pj', $dadosProposta);

        PDF::SetTitle($dadosProposta['contrato']);
        PDF::AddPage();
        PDF::writeHTML(view('pdf.ccb-pj', $dadosProposta), true, false, true, false, '');

        PDF::Output($dadosProposta['contrato'].'_'.date('Y-m-d').'.pdf');
        return;

        return view('pdf.ccb-pj', $this->service->contratoPj($idProposta) ?? []);
    }
}
