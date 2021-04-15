<?php
class Matematica
{
    /** Método estático é um método especial que não precisa criar 
     *  um objeto para se ter acesso. Para criar é só colocar o nome
     *  depois da declaração 'public'
     */

    //Declaração do método estático
    public static function somar($x, $y)
    {
        return $x + $y;
    }
}

echo Matematica::somar(2, 3);
/** Para se ter acesso a um método estático chama a classe 
 *  e usa-se o sinal (::) junto com o nome do método criado
 */
