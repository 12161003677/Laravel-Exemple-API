<?php

namespace Database\Seeders;

USE App\Models\AtividadeComercial;

use Illuminate\Database\Seeder;

class AtividadeComercialSeeder extends Seeder
{
    /**
     * Seeder para o preenchimento inicial da tabela cad_ramo_atividade com os dados já existentes na GAC_Credenciadore (Bolt)
     */
    private $lista_atividade_comercial = ['ADMINISTRADORA DE CARTAO DE CREDITO', 'SUPERMERCADO', 'FARMACIA / DROGARIA / MANIPULAÇAO', 'MATERIAIS PARA CONSTRUÇAO', 'MOVEIS E/OU ELETROELETRONICOS', 'CONFECÇÕES/ROUPAS/ACESSÓRIOS', 'CALÇADOS E ACESSORIOS', 'AGUA E GÁS', 'TELEFONIA CELULAR E FIXA', 'PAPELARIA E LIVRARIA', 'AUTO PECAS E ACESSORIOS', 'PNEUS E ACESSORIOS', 'BRINQUEDOS E PRESENTES', 'COMBUSTIVEIS E LUBRIFICANTES', 'ACOUGUE', 'MOTO PECAS E ACESSORIOS', 'RESTAURANTE', 'AUTO ESCOLA', 'BAR', 'CLINICA', 'ACADEMIA', 'BORRACHARIA', 'PRODUTOS AGROPECUARIOS', 'CENTRO AUTOMOTIVO', 'INFORMATICA', 'MATERIAIS ESPORTIVOS', 'GAMES E ACESSORIOS', 'COSMETICOS/PERFUMARIA', 'FRUTAS E VERDURAS', 'MERCEARIA', 'OTICA', 'VARIEDADES', 'ADVOCACIA', 'ODONTOLOGIA', 'OFTALMOLOGISTA', 'PET SHOP', 'SOM E ACESSORIOS', 'FISIOTERAPIA', 'CD´S E DVD´S', 'PANIFICADORA', 'MAQUINAS E ACESSORIOS', 'PERFUMARIA', 'SALAO DE BELEZA', 'JOIAS/BIJOUTERIAS/ACESSORIOS', 'FOTOS E ACESSORIOS', 'MATERIAIS ELETRICOS', 'FONOAUDIOLOGIA', 'MARMORARIA', 'IMOBILIARIA', 'BAZAR', 'BICICLETAS E PECAS', 'PRESENTES E ACESSORIOS', 'TECIDOS EM GERAL', 'SERRALHERIA', 'DISTRIBUIDORA DE BEBIDAS', 'LAVAJATO/ESTACIONAMENTO', 'EXCURSOES', 'FLORICULTURA', 'HOSPITAL / SANTA CASA', 'COMERCIO DE AUTOMOVEIS', 'ENGENHARIA', 'OFICINA / BORRACHARIA', 'PRÉ-MOLDADOS / LAJES', 'FRIOS', 'RADIO', 'LANCHONETE', 'DESPACHANTE', 'MADEIREIRA', 'SISTEMAS DE SEGURANCA', 'TAPECARIA', 'VETERINARIA', 'VIDRACARIA', 'TREINAMENTO E APREDIZAGEM', 'PSICOLOGA', 'COLCHOES', 'HOTELARIA', 'SERVICOS VETERINARIOS', 'ENSINO', 'PIZZARIA /RESTAURANTE ', 'INSTRUMENTOS MUSICAIS', 'COOPERATIVA', 'LOJA DE TINTAS EM GERAL', 'COMERCIO VAREJISTA DE MERCADORIAS EM GERAL', 'RECARGA DE CELULAR', 'PROMOCAO DE VENDAS', 'PRODUTOS SANEANTES (PRODUTOS SANITARIOS)', 'ELETRODOMESTICOS', 'PRESTADORA DE SERVICOS', 'FERRAGENS E FERRAMENTAS', 'SERVICOS DE FUNERARIA', 'SUPLEMENTOS/PRODUTOS NATURAIS', 'PROD DE ESPETAC DE RODEIOS, VAQUEJADAS E SIMILARES', 'LOJA DE DOCES/NOZES/CONFEITOS', 'PECAS E ACESSORIOS ELETROELETRONICOS', 'PRODUTOS E ARTEFATOS DE CIMENTO', 'ARTIGOS DE COURO', 'RECREACAO/LAZER', 'TABACARIA', 'FABRICAÇÃO DE LATICINIOS', 'EVENTOS', 'PSICOLOGIA', 'ASSOCIAÇÃO COMERCIAL', 'CREDENCIADORA', 'ARTEFATOS DE COURO'];

    public function run()
    {
        foreach ($this->lista_atividade_comercial as $atividade) {
        	$r = AtividadeComercial::create([
        		'descricao' => $atividade
        	]);
        }
    }
}
