<?php

/* 
 * Uma classe com funções para cálculos estatísticos.
 */
class Estatistica
{
    /*
     * Média Aritmética
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function mediaAritmetica(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $media = 0;
        foreach ($dados as $x) {
            $somatorio = $somatorio + $x;
        }
        if ($n > 0) {
            $media = $somatorio / $n;
        }
        return $media;
    }
    
    /*
     * Média aritmética ponderada
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function mediaAritmeticaPonderada(array $dados): float
    {
        $somatorio = 0;
        $pesos = 0;
        $media = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $somatorio = $somatorio + ($w * $x);
            $pesos = $pesos + $w;
        }
        if ($pesos > 0) {
            $media = $somatorio / $pesos;
        }
        return $media;
    }
    
    /*
     * Média Geométrica
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function mediaGeometrica(array $dados): float
    {
        $produtorio = 1;
        $n = count($dados);
        $media = 0;
        foreach ($dados as $x) {
            $produtorio = $produtorio * $x;
        }
        if ($n > 0) {
            $media = pow($produtorio, 1 / $n);
        }
        return $media;
    }
    
    /*
     * Média Geométrica Ponderada
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function mediaGeometricaPonderada(array $dados): float
    {
        $produtorio = 1;
        $pesos = 0;
        $media = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $produtorio = $produtorio * pow($x, $w);
            $pesos = $pesos + $w;
        }
        if ($pesos > 0) {
            $media = pow($produtorio, 1 / $pesos);
        }
        return $media;
    }
    
    /*
     * Média Harmônica
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function mediaHarmonica(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $media = 0;
        foreach ($dados as $x) {
            $somatorio = $somatorio + (1 / $x);
        }
        if ($somatorio != 0) {
            $media = $n / $somatorio;
        }
        return $media;
    }
    
    /*
     * Média Harmônica Ponderada
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function mediaHarmonicaPonderada(array $dados): float
    {
        $somatorio = 0;
        $pesos = 0;
        $media = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $somatorio = $somatorio + ($w / $x);
            $pesos = $pesos + $w;
        }
        if ($somatorio != 0) {
            $media = $pesos / $somatorio;
        }
        return $media;
    }
    
    /*
     * Média Quadrática
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function mediaQuadratica(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $media = 0;
        foreach ($dados as $x) {
            $somatorio = $somatorio + pow($x, 2);
        }
        if ($n > 0) {
            $media = sqrt($somatorio / $n);
        }
        return $media;
    }
    
    /*
     * Média Quadrática Ponderada
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function mediaQuadraticaPonderada(array $dados): float
    {
        $somatorio = 0;
        $pesos = 0;
        $media = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $somatorio = $somatorio + ($w * pow($x, 2));
            $pesos = $pesos + $w;
        }
        if ($pesos > 0) {
            $media = sqrt($somatorio / $pesos);
        }
        return $media;
    }
    
    /*
     * Média Cúbica
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function mediaCubica(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $media = 0;
        foreach ($dados as $x) {
            $somatorio = $somatorio + pow($x, 3);
        }
        if ($n > 0) {
            $media = pow(($somatorio / $n), 1/3);
        }
        return $media;
    }
    
    /*
     * Média Cúbica Ponderada
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function mediaCubicaPonderada(array $dados): float
    {
        $somatorio = 0;
        $pesos = 0;
        $media = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $somatorio = $somatorio + ($w * pow($x, 3));
            $pesos = $pesos + $w;
        }
        if ($pesos > 0) {
            $media = pow(($somatorio / $pesos), 1/3);
        }
        return $media;
    }
    
    /*
     * Média Desarmônica
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function mediaDesarmonica(array $dados): float
    {
        $sx = 0;
        $sxi = 0;
        $n = count($dados);
        foreach ($dados as $x) {
            $sx = $sx + $x;
            $sxi = $sxi + (1 / $x);
        }
        $media = 2 / ((1 / ($sx / $n)) + (1 / (pow($sx / $n, 2) / ($n / $sxi))));
        return $media;
    }
    
    /*
     * Média Desarmônica Ponderada
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function mediaDesarmonicaPonderada(array $dados): float
    {
        $spwx = 0;
        $sw = 0;
        $sdwx = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $spwx = $spwx + ($w * $x);
            $sw = $sw + $w;
            $sdwx = $sdwx + ($w / $x);
        }
        $media = 2 / ((1 / ($spwx / $sw)) + (1 / (pow($spwx / $sw, 2) / ($sw / $sdwx))));
        return $media;
    }
    
    /*
     * Desvio Médio
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function desvioMedio(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $media = $this->mediaAritmetica($dados);
        $desvio = 0;
        foreach ($dados as $x) {
            $somatorio = $somatorio + abs($x - $media);
        }
        if ($n > 0) {
            $desvio = $somatorio / $n;
        }
        return $desvio;
    }
    
    /*
     * Desvio Mediano
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function desvioMediano(array $dados): float
    {
        $mediana = $this->mediana($dados);
        $desvios = array();
        foreach ($dados as $x) {
            $desvios[] = abs($x - $mediana);
        }
        $desvio = $this->mediana($desvios);
        return $desvio;
    }
    
    /*
     * Mediana
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function mediana(array $dados): float
    {
        sort($dados);
	$n = count($dados);
	$i = round($n / 2) - 1;
	if ($n % 2 !== 0) {
            $mediana = $dados[$i];
        } else {
            $mediana = $this->mediaAritmetica([$dados[$i], $dados[$i + 1]]);
        }
        return $mediana;
    }
    
    /*
     * Moda
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return array
     */
    public function moda(array $dados): array
    {
        $moda = array();
        $frequencias = array_count_values($dados);
        arsort($frequencias);
        $m = array_key_first($frequencias);
        if ($frequencias[$m] > 1) {
            foreach ($frequencias as $x => $f) {
                if ($f == $frequencias[$m]) {
                    $moda[] = $x;
                } else {
                    break;
                }
            }
        }
        return $moda;
    }
    
    /*
     * Variância Populacional para dados não agrupados
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function varianciaPopulacionalNaoAgrupado(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $media = $this->mediaAritmetica($dados);
        $variancia = 0;
        foreach ($dados as $x) {
            $somatorio = $somatorio + pow($x - $media, 2);
        }
        if ($n > 0) {
            $variancia = $somatorio / $n;
        }
        return $variancia;
    }
    
    /*
     * Variância Amostral para dados não agrupados
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function varianciaAmostralNaoAgrupado(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $media = $this->mediaAritmetica($dados);
        $variancia = 0;
        foreach ($dados as $x) {
            $somatorio = $somatorio + pow($x - $media, 2);
        }
        if ($n > 1) {
            $variancia = $somatorio / ($n - 1);
        }
        return $variancia;
    }
    
    /*
     * Desvio Padrão Populacional para dados não agrupados
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function desvioPadraoPopulacionalNaoAgrupado(array $dados): float
    {
        $variancia = $this->varianciaPopulacionalNaoAgrupado($dados);
        $desvio = sqrt($variancia);
        return $desvio;
    }
    
    /*
     * Desvio Padrão Amostral para dados não agrupados
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function desvioPadraoAmostralNaoAgrupado(array $dados): float
    {
        $variancia = $this->varianciaAmostralNaoAgrupado($dados);
        $desvio = sqrt($variancia);
        return $desvio;
    }
    
    /*
     * Variância Populacional para dados agrupados
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function varianciaPopulacionalAgrupado(array $dados): float
    {
        $somatorio = 0;
        $pesos = 0;
        $media = $this->mediaAritmeticaPonderada($dados);
        $variancia = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $somatorio = $somatorio + (pow($x - $media, 2) * $w);
            $pesos = $pesos + $w;
        }
        if ($pesos > 0) {
            $variancia = $somatorio / $pesos;
        }
        return $variancia;
    }
    
    /*
     * Variância Amostral para dados agrupados
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function varianciaAmostralAgrupado(array $dados): float
    {
        $somatorio = 0;
        $pesos = 0;
        $media = $this->mediaAritmeticaPonderada($dados);
        $variancia = 0;
        foreach ($dados as $i) {
            $w = $i[0];
            $x = $i[1];
            $somatorio = $somatorio + (pow($x - $media, 2) * $w);
            $pesos = $pesos + $w;
        }
        if ($pesos > 1) {
            $variancia = $somatorio / ($pesos - 1);
        }
        return $variancia;
    }
    
    /*
     * Desvio Padrão Populacional para dados agrupados
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function desvioPadraoPopulacionalAgrupado(array $dados): float
    {
        $variancia = $this->varianciaPopulacionalAgrupado($dados);
        $desvio = sqrt($variancia);
        return $desvio;
    }
    
    /*
     * Desvio Padrão Amostral para dados agrupados
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function desvioPadraoAmostralAgrupado(array $dados): float
    {
        $variancia = $this->varianciaAmostralAgrupado($dados);
        $desvio = sqrt($variancia);
        return $desvio;
    }
    
    /*
     * Coeficiente de Variação populacional para dados não agrupados
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function coeficienteDeVariacaoPopulacionalNaoAgrupado(array $dados): float
    {
        $desvio = $this->desvioPadraoPopulacionalNaoAgrupado($dados);
        $media = $this->mediaAritmetica($dados);
        $cv = $desvio / $media * 100;
        return $cv / 100;
    }
    
    /*
     * Coeficiente de Variação populacional para dados agrupados
     * 
     * @param array [[w¹,x¹], [w²,x²], [w³,x³], ...]
     * 
     * @return float
     */
    public function coeficienteDeVariacaoPopulacionalAgrupado(array $dados): float
    {
        $desvio = $this->desvioPadraoPopulacionalAgrupado($dados);
        $media = $this->mediaAritmeticaPonderada($dados);
        $cv = $desvio / $media * 100;
        return $cv / 100;
    }
    
    /*
     * Covariância Populacional
     * 
     * @param array [[x¹,y¹], [x²,y²], [x³,y³], ...]
     * 
     * @return float
     */
    public function covarianciaPopulacional(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $covariancia = 0;
        $dadosx = array();
        $dadosy = array();
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $dadosx[] = $x;
            $dadosy[] = $y;
        }
        $mediax = $this->mediaAritmetica($dadosx);
        $mediay = $this->mediaAritmetica($dadosy);
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $somatorio = $somatorio + (($x - $mediax) * ($y - $mediay));
        }
        if ($n > 0) {
            $covariancia = $somatorio / $n;
        }
        return $covariancia;
    }
    
    /*
     * Covariância Amostral
     * 
     * @param array [[x¹,y¹], [x²,y²], [x³,y³], ...]
     * 
     * @return float
     */
    public function covarianciaAmostral(array $dados): float
    {
        $somatorio = 0;
        $n = count($dados);
        $covariancia = 0;
        $dadosx = array();
        $dadosy = array();
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $dadosx[] = $x;
            $dadosy[] = $y;
        }
        $mediax = $this->mediaAritmetica($dadosx);
        $mediay = $this->mediaAritmetica($dadosy);
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $somatorio = $somatorio + (($x - $mediax) * ($y - $mediay));
        }
        if ($n > 1) {
            $covariancia = $somatorio / ($n - 1);
        }
        return $covariancia;
    }
    
    /*
     * Coeficiente de Correlação Populacional de Pearson
     * 
     * @param array [[x¹,y¹], [x²,y²], [x³,y³], ...]
     * 
     * @return float
     */
    public function coeficienteDeCorrelacaoPopulacionalDePearson(array $dados): float
    {
        $dadosx = array();
        $dadosy = array();
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $dadosx[] = $x;
            $dadosy[] = $y;
        }
        $covariancia = $this->covarianciaPopulacional($dados);
        $desviox = $this->desvioPadraoPopulacionalNaoAgrupado($dadosx);
        $desvioy = $this->desvioPadraoPopulacionalNaoAgrupado($dadosy);
        $coeficiente = $covariancia / ($desviox * $desvioy);
        return $coeficiente;
    }
    
    /*
     * Coeficiente de Correlação Amostral de Pearson
     * 
     * @param array [[x¹,y¹], [x²,y²], [x³,y³], ...]
     * 
     * @return float
     */
    public function coeficienteDeCorrelacaoAmostralDePearson(array $dados): float
    {
        $dadosx = array();
        $dadosy = array();
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $dadosx[] = $x;
            $dadosy[] = $y;
        }
        $covariancia = $this->covarianciaAmostral($dados);
        $desviox = $this->desvioPadraoAmostralNaoAgrupado($dadosx);
        $desvioy = $this->desvioPadraoAmostralNaoAgrupado($dadosy);
        $coeficiente = $covariancia / ($desviox * $desvioy);
        return $coeficiente;
    }
    
    /*
     * Coeficiente de Correlação de Pearson
     * 
     * @param array [[x¹,y¹], [x²,y²], [x³,y³], ...]
     * 
     * @return float
     */
    public function coeficienteDeCorrelacaoDePearson(array $dados): float
    {
        $dadosx = array();
        $dadosy = array();
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $dadosx[] = $x;
            $dadosy[] = $y;
        }
        $sp = $this->somatorioProdutos($dados);
        $sqx = $this->somatorioQuadrados($dadosx);
        $sqy = $this->somatorioQuadrados($dadosy);
        $coeficiente = $sp / sqrt($sqx * $sqy);
        return $coeficiente;
    }
    
    /*
     * Somatório dos Quadrados
     * 
     * @param array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function somatorioQuadrados(array $dados): float
    {
        $sq = 0;
        $s = 0;
        $somatorio = 0;
        $n = count($dados);
        foreach ($dados as $x) {
            $sq = $sq + pow($x, 2);
            $s = $s + $x;
        }
        if ($n > 0) {
            $somatorio = $sq - (pow($s, 2) / $n);
        }
        return $somatorio;
    }
    
    /*
     * Somatório dos Produtos XY
     * 
     * @param array [[x¹,y¹], [x²,y²], [x³,y³], ...]
     * 
     * @return float
     */
    public function somatorioProdutos(array $dados): float
    {
        $sp = 0;
        $sx = 0;
        $sy = 0;
        $somatorio = 0;
        $n = count($dados);
        foreach ($dados as $i) {
            $x = $i[0];
            $y = $i[1];
            $sp = $sp + ($x * $y);
            $sx = $sx + $x;
            $sy = $sy + $y;
        }
        if ($n > 0) {
            $somatorio = $sp - (($sx * $sy) / $n);
        }
        return $somatorio;
    }
    
    /*
     * Z-score Populacional para dados não agrupados
     * 
     * @param float x
     *        array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function escoreZPopulacionalNaoAgrupado(float $x, array $dados): float
    {
        $media = $this->mediaAritmetica($dados);
        $desvio = $this->desvioPadraoPopulacionalNaoAgrupado($dados);
        $escore = ($x - $media) / $desvio;
        return $escore;
    }
    
    /*
     * Z-score Amostral para dados não agrupados
     * 
     * @param float x
     *        array [x¹, x², x³, ...]
     * 
     * @return float
     */
    public function escoreZAmostralNaoAgrupado(float $x, array $dados): float
    {
        $media = $this->mediaAritmetica($dados);
        $desvio = $this->desvioPadraoAmostralNaoAgrupado($dados);
        $escore = ($x - $media) / $desvio;
        return $escore;
    }
    
}
