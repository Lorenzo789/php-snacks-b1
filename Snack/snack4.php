<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK 4</title>
</head>

<body>
    <section>

        <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. poi mostrarlo -->
    
        <h1>Php Snack 4</h1>

        <?php 
            $paragraph = "Appena nato, Ade fu brutalmente ingoiato dal padre. I suoi fratelli seguirono la stessa sorte con eccezione dell'ultimogenito Zeus, che ideò uno stratagemma con la madre Rea, grazie al quale il padre rigurgitò i figli.
            Ade partecipò alla Titanomachia, nell'occasione in cui i Ciclopi gli fabbricarono la kunée, o elmo dell'oscurità, un magnifico elmo magico in pelle d'animale che gli permette di diventare invisibile: si poté introdurre così segretamente nella dimora di Crono rubandogli le armi e, mentre Poseidone minacciava il padre col tridente, Zeus lo colpì con la folgore.
            In seguito, ricevette la sovranità del mondo sotterraneo e degli Inferi, quando l'universo fu diviso con i suoi due fratelli Zeus e Poseidone, che ottennero rispettivamente il regno del cielo e del mare.
            Viene annoverato saltuariamente fra le divinità olimpiche, nonostante questo sia contrario alla tradizione canonica; Ade è d'altra parte poco presente nella mitologia, nonostante sia uno degli dei più potenti, essendo essenzialmente legato ai racconti legati agli eroi: Orfeo, Teseo, Piritoo ed Eracle sono fra i pochi mortali ad averlo incontrato. Inoltre la tradizione lo vuole riluttante ad abbandonare il mondo dell'Aldilà: le uniche due eccezioni si ricordano per il rapimento di Persefone e per ricevere alcune cure dopo essere stato ferito da una freccia di Eracle.
            La leggenda lo vuole padrone delle greggi solari, al pascolo nell'isola Erizia, la cosiddetta isola rossa, dove il Sole muore quotidianamente. Il pastore era chiamato Menete.
            Tuttavia in queste storie è chiamato Crono, o Gerione.";
    
            $paragraphExploded = explode('.', $paragraph,);
        ?>
    
        <?php for ($i=0; $i < count($paragraphExploded); $i++) { 
            
        ?>
        <p>
            <?php 
                echo $paragraphExploded[$i];
            ?>
        </p>
        <?php } ?>

    </section>
</body>

</html>