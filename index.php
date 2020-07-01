<?php

    function calcular_frete($cep_origem,
        $cep_destino,
        $peso,
        $valor_declarado,
        $tipo_do_frete,
        $altura = 6,
        $largura = 20,
        $comprimento = 20){
            $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
            $url .= "nCdEmpresa=";
            $url .= "&sDsSenha=";
            $url .= "&nCdServico=" . $tipo_do_frete;
            $url .= "&sCepOrigem=" . $cep_origem;
            $url .= "&sCepDestino=" . $cep_destino;
            $url .= "&nVlPeso=" . $peso;
            $url .= "&nCdFormato=1";
            $url .= "&nVlLargura=" . $largura;
            $url .= "&nVlAltura=" . $altura;
            $url .= "&nVlComprimento=". $comprimento;
            $url .= "&sCdMaoPropia=n";
            $url .= "&nVlValorDeclarado=" . $valor_declarado;
            $url .= "&sCdAvisoRecebimento=n";
            $url .= "&nVlDiametro=0";
            $url .= "&StrRetorno=xml";
            
            $xml = simplexml_load_file($url);
            return $xml->cServico;
        }

       $val = (calcular_frete('89558000',
        '89590000',
        50,
        500,
        '41106'));

        

?>

<h1><?= "Valor PAC: R$" .$val->Valor ?></h1>