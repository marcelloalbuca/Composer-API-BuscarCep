<?php declare (strict_types=1);


require_once "../composer/src/Search.php";
use composer\Search;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromcodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste(){
        return [
            "Endereço Praça da Sé" =>[
                "01001000",
                [
                "cep" => "01001-000",
                "logradouro" => "Praça da Sé",
                "complemento" => "lado ímpar",
                "bairro" => "Sé",
                "localidade" => "São Paulo",
                "uf" => "SP",
                "unidade" => "",
                "ibge" => "3550308",
                "gia" => "1004"
                ]
            ],
            "Endereço Praça da Sé 2" =>[
                "03624010",
                [
                "cep" => "03624-010",
                "logradouro" => "Rua Luís Asson",
                "complemento" => "",
                "bairro" => "Vila Buenos Aires",
                "localidade" => "São Paulo",
                "uf" => "SP",
                "unidade" => "",
                "ibge" => "3550308",
                "gia" => "1004"
                ]
            ],               
        ];
    }
}