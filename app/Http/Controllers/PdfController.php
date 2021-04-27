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

        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::writeHTML(view('pdf.ccb-pj', $dadosProposta), true, false, true, false, '');

        PDF::Output('hello_world.pdf');
        return;

        return view('pdf.ccb-pj', $this->service->contratoPj($idProposta) ?? []);
    }
}
