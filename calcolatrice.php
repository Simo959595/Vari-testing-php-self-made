<?php
//CALCOLATRICE
switch ($operazione) {
    //SOMMA
            case 'somma':
                $risultato = $numero1 + $numero2;
                break;
    //SOTTRAZIONE
            case 'sottrazione':
                $risultato = $numero1 - $numero2;
                break;
    //MOLTIPLICAZIONE
            case 'moltiplicazione':
                $risultato = $numero1 * $numero2;
                break;
    //DIVISIONE
            case 'divisione':
                if ($numero2 != 0) {
                    $risultato = $numero1 / $numero2;
                } else {
                    $risultato = "Non è possibile dividere per zero!";
                }
                break;
    //SE I DATI IMMESSI SONO DIVERSI DAI CANONI RICHIESTI:
            default:
                $risultato = "Operazione non valida";
        }

//PRIMA DELLA DIMOSTRAZIONE DELLE OPERAZIONI MANUALI RIASSUMO L'ORDINE FONDAMNETALE DELLE OPERAZIONI:
// -ELEVAMENTO A POTENZA
// -MOLTIPLICAZIONE
// -DIVISIONE
// -SOMMA
// -SOTTRAZIONE

//STAMPA MANUALE DEI RISULTATI A DUE CIFRE
        $numero1=10;
        $numero2=4;
        //SOMMA
        echo $numero1+$numero2 . "\n"; //14
        //SOTTRAZIONE
        echo $numero1-$numero2 . "\n"; //6
        //MOLTIPLICAZIONE
        echo $numero1*$numero2 . "\n"; //40
        //DIVISIONE
        echo $numero1/$numero2 . "\n"; //2.5
        //ELEVAMENTO A POTENZA
        echo $numero1**$numero2 . "\n"; //10.000


//STAMPA MANUALE DEI RISULTATI A TRE CIFRE
        $numero1=10;
        $numero2=4;
        $numero3=2;
        //SOMMA
        echo $numero1+$numero2**$numero3 . "\n"; //26
        //SOTTRAZIONE
        echo $numero1-$numero2*$numero3 . "\n"; //2
        //MOLTIPLICAZIONE
        echo $numero1*$numero2/$numero3 . "\n"; //20
        //DIVISIONE
        echo $numero1/$numero2+$numero3 . "\n"; //4.5
        //ELEVAMENTO A POTENZA
        echo $numero1**$numero2-$numero3 . "\n"; //9.998


//ULTIMO ESEMPIO PER RICORDARE L'ORDINE IMPORTANTE NELL'ESECUZIONE DELLE OPERAZIONI:

$numero1=6;
$numero2=2;
$numero3=4;
$numero4=3;
$numero5=2;
$numero6=50;

//ORDINE CORRETTO DI ESECUZIONE:
echo $numero1**$numero2*$numero3/$numero4+$numero5-$numero6 . "\n";

//ESEMPIO SBAGLIATO:
echo $numero1-$numero2+$numero3/$numero4*$numero5**$numero6 . "\n";
//N.B.: IL PROGRAMMA ESEGUIRA' COMUNQUE LE OPERAZIONI COME LE ABBIAMO SCRITTE, NEL SECONDO CASO QUINDI, PER COLPA NOSTRA, LE ESEGUIRA' IN MODO ERRATO
//QUINDI E' BENE ESSERE ORDINATI ANCHE QUANDO SI SCRIVONO OPERAZIONI COME QUESTA (APPARENTEMENTE SCARNE E BANALI) 