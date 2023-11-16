<?php 
    include "header.php";
    include "config.php";

    $sql = "SELECT * FROM sobre";
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    $sobres = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <section class="container">
        <div>
            <h1 class="d-flex justify-content-center">Nossa história</h1>
            <span class="aboutus">
                Instituto Autista De Umuarama: Desenvolvendo Pontes para o Futuro

                No coração de nossa comunidade, floresce uma instituição dedicada a desvendar os mistérios do espectro
                autista, promovendo compreensão, aceitação e, acima de tudo, aprendizado. Instituto Autista De Umuarama
                (IAU) emerge como um farol de esperança, fornecendo recursos valiosos e conhecimentos fundamentais para
                famílias, educadores e profissionais de saúde.<br>

                No cerne da missão do IAU está a crença inabalável de que a educação é a chave para construir um mundo
                mais
                inclusivo. Cada indivíduo, independente de suas diferenças, merece a oportunidade de crescer, aprender e
                contribuir plenamente para a sociedade. O IAU se destaca como um pioneiro na disseminação de informações
                precisas e atualizadas sobre o autismo, capacitando as pessoas a compreenderem e atenderem às
                necessidades
                únicas daqueles que estão no espectro.<br>

                O centro oferece uma variedade de programas educacionais, desde workshops intensivos até cursos mais
                abrangentes, todos ministrados por uma equipe multidisciplinar de especialistas em autismo. Os
                participantes
                têm a oportunidade não apenas de adquirir conhecimentos teóricos, mas também de se envolverem em
                experiências práticas que os ajudam a desenvolver empatia e habilidades práticas para apoiar
                efetivamente
                aqueles que vivem com o espectro autista.
                Além disso, o IAU atua como um hub de recursos, conectando pais, cuidadores e profissionais de saúde a
                informações valiosas sobre terapias, tecnologias assistivas e estratégias de ensino. Este é um espaço
                onde
                as dúvidas se transformam em descobertas, e a incerteza dá lugar à confiança.<br>

                A sensibilização para o autismo é um dos pilares fundamentais do trabalho do IAU. A instituição realiza
                eventos regulares, como palestras, seminários e campanhas de conscientização, para educar a comunidade
                em
                geral sobre a importância da aceitação e inclusão. Estas atividades não só desfazem mitos prejudiciais,
                mas
                também promovem uma mudança cultural que celebra a diversidade.<br>

                O IAU é mais do que uma instituição educacional; é uma comunidade que se une para criar um ambiente onde
                todos têm a chance de brilhar. Ao fornecer ferramentas educacionais e promover uma cultura de
                compreensão, o
                Instituto Autista De Umuarama está pavimentando o caminho para um futuro mais inclusivo, onde cada
                indivíduo, independentemente do seu lugar no espectro, possa florescer e alcançar seu pleno potencial.
            </span>
        </div>

    </section>

    <div class="p-5 row">
        <?php 
            shuffle($sobres);
            foreach($sobres as $sobre) {
        ?>
        <div class="col-4">
            <img src="./assets/media/<?=$sobre["imagem"]?>" alt="<?=$sobre["nome"]?>">
            <p class="text-center">
                <strong>
                    <?=$sobre["nome"]?>
                </strong>
                <br>
            </p>
        </div>
        <?php 
            }
        ?>
    </div>
</main>


<?php 
    include "footer.php";
?>