<?php
$TittlePageEs = "Honey Authenticity | Inicio";
$TittlePageEn = "Honey Authenticity | Inicio";
$TittlePageFr = "Honey Authenticity | Inicio";

$aboutTxt = "© 2020 Honey Authenticity";



/* ------------------------------------------------------------------------------------------------------------- */


function indexMain()
{
    $imgTarroSrc = "media/index/tarro.png";

    echo '<h2 class="toph2index text-center es"><spam class="font1 es">Un tercio de la miel comerciada internacionalmente es</spam></h2>
    <h2 class="toph2index text-center fr"><spam class="font1 fr">Un tiers du miel commercialisé à l&apos;international est</spam></h2>
    <h2 class="toph2index text-center en"><spam class="font1 en">A third of internationally traded honey is</spam></h2>
    <h2 class="text-center es"><spam class="font2 es">adulterada o 100% falsa</spam></h2>
    <h2 class="text-center fr"><spam class="font2 fr">falsifié ou 100% faux</spam></h2>
    <h2 class="text-center en"><spam class="font2 en">adulterated or 100% false</spam></h2>
    <img src="' .  $imgTarroSrc . '" alt="" class="tarros">
    <h2 class="text-center font1 es">¡Actuemos!</h2>
    <h2 class="text-center font1 fr"> Agissons!</h2>
    <h2 class="text-center font1 en">Let&apos;s act!</h2>';

        
}

function consequenceIndexEs()
{
    echo '<h2 class="font1 es">¿Cuáles son las consecuencias?</h2>
             
            <p class="font2 es">La adulteración y falsificación a gran escala de la miel
                provoca la caída de su precio y con ello acelera el colapso  de la apicultura, actividad
                que mantiene vivas las abejas, la polinización y sostiene a los apicultores,
                que son los los principales guardianes de las selvas, los bosques y la 
                biodiversidad.
            </p>';

    /* FR */
    echo '<h2 class="font1 fr">Quelles en sont les conséquences?</h2>
    
            <p class="font2 fr">La falsification et la falsification à grande échelle du miel font chuter son prix et accélèrent ainsi l&apos;effondrement de l&apos;apiculture, une activité qui maintient les abeilles en vie, pollinise et soutient les apiculteurs, qui sont les principaux gardiens des jungles. , forêts et biodiversité.
            </p>';

    /* EN */
    echo '<h2 class="font1 en">What are the consequences?</h2>

            <p class="font2 en">The large-scale adulteration and falsification of honey causes its price to fall and thus accelerates the collapse of beekeeping, an activity that keeps bees alive, pollination and supports beekeepers, who are the main guardians of the jungles , forests and biodiversity.
            </p>';
}

function fraudIndexEs()
{
    echo '  <h2 class="font1 es">¿Cómo es posible este fraude?</h2>
            <h3 class="font2 es">Miles de toneladas de miel no es hecha por abejas a partir de flores...</h3>
            <p  class="font3 bg-darkTrasparent-1rem es">La tecnología para falsificar la miel ha superado a los análisis  tradicionales 
            que autentifican su pureza, limitación  que aprovechan fabricantes y  comercializadores fraudulentos.</p>

            <h2 class="font1 fr">Comment cette fraude est-elle possible?</h2>
            <h3 class="font2 fr">Des milliers de tonnes de miel ne sont pas faites par des abeilles à partir de fleurs ...</h3>
            <p  class="font3 bg-darkTrasparent-1rem fr">La technologie de contrefaçon du miel a dépassé les analyses traditionnelles 
            qui authentifient sa pureté, une limitation dont les fabricants et les commerçants profitent.</p>

            <h2 class="font1 en">How is this fraud possible?</h2>
            <h3 class="font2 en">Thousands of tons of honey is not made by bees from flowers ...</h3>
            <p  class="font3 bg-darkTrasparent-1rem en">The technology to counterfeit honey has surpassed the traditional analyzes that 
            authenticate its purity, a limitation that manufacturers and marketers take advantage of.</p>';
}

function fraudMessageIndexEs()
{
    echo '<h3 class="font2 bg-darkTrasparent-1rem buttom-left es">
        <spam>...sino en fábricas asiáticas,<br> lo cual es un </spam> <span class="font5"> crimen</span>
        </h3>';
    /* FR */
    echo '<h3 class="font2 bg-darkTrasparent-1rem buttom-left fr">
        <spam>... mais dans les usines asiatiques, <br> qui est un </spam> <span class="font5"> crime</span>
    </h3>';
    /* EN */
    echo '<h3 class="font2 bg-darkTrasparent-1rem buttom-left en">
        <spam>... but in Asian factories, <br> which is a </spam> <span class="font5"> crime</span>
    </h3>';
}

function honeyFraudIndexEs()
{
    echo '<h2 class="font1 es">El fraude de la miel en el mundo...</h2>
                <p class="font2 es">El fraude ha llegado a los medios con evidencia  científica
                    en Australia, España, Francia, Estados Unidos, Canadá, India y el Reino Unido, siendo
                    este el máximo  importador mundial de miel china.  A pesar de la
                    resolución del Parlamento de la UE y la  declaración de Apimondia, este crimen contnúa
                    devastando a los apicultores y sus familias, quienes son la principal línea de
                    defensa para salvar a las abejas.
                </p>';
    echo '<h2 class="font1 fr">Fraude au miel dans le monde ...</h2>
                <p class="font2 fr">La fraude a atteint les médias avec des preuves scientifiques en Australie, en Espagne, en France, aux États-Unis, au Canada, en Inde et au Royaume-Uni, étant le plus grand importateur mondial de miel chinois. Malgré la résolution du Parlement européen et la déclaration d&apos;Apimondia, ce crime continue de dévaster les apiculteurs et leurs familles, qui sont la principale ligne de défense pour sauver les abeilles.
                </p>';
    echo '<h2 class="font1 en">Honey fraud in the world ...</h2>
                <p class="font2 en">The fraud has reached the media with scientific evidence in Australia, Spain, France, the United States, Canada, India and the United Kingdom, being the world&apos;s largest importer of Chinese honey. Despite the resolution of the EU Parliament and the declaration of Apimondia, this crime continues to devastate beekeepers and their families, who are the main line of defense to save bees.
                </p>';
}

/***************************
 * Cnecuencias
****************************/

function affectationsEs()
{
    echo '<h2 class="es">
            <p class="font1 interlineadoIndex es">Deforestación, <br>pérdida de la biodiversidad y</p>
            <p class="font2 interlineadoIndex es">muerte de abejas</p>
            <p class="font3 interlineadoIndex2 es">son algunas de las consecuencias del<br>fraude de la miel</p>
        </h2>';
}
function affectationsFr()
{
        echo '<h2 class="fr">
            <p class="font1 interlineadoIndex">La déforestation, <br>perte de biodiversité et</p>
            <p class="font2 interlineadoIndex">mort d&apos;abeilles</p>
            <p class="font3 interlineadoIndex2">sont certaines des conséquences de <br>fraude au miel</p>
        </h2>';
}
function affectationsEn()
{
        echo '<h2 class="en">
            <p class="font1 interlineadoIndex">Deforestation, <br>loss of biodiversity and</p>
            <p class="font2 interlineadoIndex">bee death</p>
            <p class="font3 interlineadoIndex2">are some of the consequences <br>of honey fraud</p>
        </h2>';
}

function lowPricesAffectationsEs()
{
    echo '<h2 class="font1 es">Bajos precios, principal, amenaza para las abejas </h2>
            <p class="font2 es">Un estudio
                <spam class="SpamYellow">publicado en 2015</spam> demuestra que los  bajos precios de la
                miel son la principal ameza para las abejas melíferas, incluso por encima de los 
                plaguicidas y las plagas, ya que aunque los apicultores pierdan
                colmenas a causa de plaguicidas u otras amenazas, si la miel tiene buen precio, 
                trabajan duro y recuperan las colmenas pérdidas.<br><br> Sin embargo, si el precio cae a un
                nivel que deje de ser atractivo, los productores dejan la apicultura. El abandono conlleva a una pérdida de colmenas
                debido a que las abejas no pueden sostener su población sin los cuidados de los
                apicultores.<br><br> Muchos productores indígenas
                dependen de los ingresos que les reporta la apicultura. Los precios bajos afectan
                la economía campesina, ya de por sí muy precaria. <br><br> La falsificación de la miel
                es un crimen que desalienta la apicultura.
                Menos abejas significa menos polinización y esto afecta la producción alimentaria.
            </p>';
}
function lowPricesAffectationsFr()
{
    echo '<h2 class="font1 fr">Prix ​​bas, principale menace pour les abeilles</h2>
            <p class="font2 fr">
                Une étude <spam class="SpamYellow">publiée en 2015 </spam> montre que les bas prix du miel sont la 
                principale menace pour les abeilles, même au-dessus des pesticides et des ravageurs, car même si les 
                apiculteurs perdent des ruches à cause des pesticides ou d&apos;autres menaces, si le miel Ils ont un 
                bon prix, ils travaillent dur et récupèrent les ruches perdues.<br><br> Cependant, si le prix tombe à 
                un niveau qui nest plus attractif, les producteurs arrêteront l&apos;apiculture. L&apos;abandon 
                entraîne une perte de ruches car les abeilles ne peuvent subvenir aux besoins de leur population 
                sans les soins des apiculteurs.<br><br> De nombreux producteurs indigènes dépendent des revenus de 
                l&apos;apiculture. Les bas prix affectent l&apos;économie paysanne, déjà très précaire. <br><br> 
                La contrefaçon du miel est un crime qui décourage l&apos;apiculture. Moins d&apos;abeilles signifie 
                moins de pollinisation et cela affecte la production alimentaire.
            </p>';
}
function lowPricesAffectationsEn()
{
    echo '<h2 class="font1 en">Low prices, main threat to bees  </h2>
            <p class="font2 en">
                A study <spam class="SpamYellow">published in 2015</spam> shows that low honey prices are the main 
                threat to honey bees, even above pesticides and pests, because although beekeepers lose hives due 
                to pesticides or other threats, if honey They have a good price, they work hard and they recover 
                the lost hives.<br><br> However, if the price falls to a level that is no longer attractive, producers 
                will stop beekeeping. The abandonment leads to a loss of hives because the bees cannot sustain their 
                population without the care of the beekeepers.<br><br> Many indigenous producers depend on the income 
                from beekeeping. Low prices affect the peasant economy, already very precarious. <br><br> 
                Counterfeiting honey is a crime that discourages beekeeping. Fewer bees means less pollination 
                and this affects food production.
            </p>';
}






function lowPricesAffectationsRow1()
{
echo '<h2 class="font1 es">Bajos precios, principal, amenaza para las abejas </h2>
    <p class="font2 es">Un estudio publicado en 2015 demuestra que los bajos precios de la
        miel son la principal ameza para las abejas melíferas, incluso por encima de los
        plaguicidas y las plagas, ya que aunque los apicultores pierdan
        colmenas a causa de plaguicidas u otras amenazas, si la miel tiene buen precio,
        trabajan duro y recuperan las colmenas pérdidas.
    </p>
    <p class="font2 es">Sin embargo, si el precio cae a un
                nivel que deje de ser atractivo, los productores dejan la apicultura. El abandono conlleva a una pérdida de colmenas
                debido a que las abejas no pueden sostener su población sin los cuidados de los
                apicultores.</p>

    <h2 class="font1 fr">Prix ​​bas, principale menace pour les abeilles</h2>
    <p class="font2 fr">
        Une étude publiée en 2015 montre que les bas prix du miel sont la
        principale menace pour les abeilles, même au-dessus des pesticides et des ravageurs, car même si les
        apiculteurs perdent des ruches à cause des pesticides ou d&apos;autres menaces, si le miel Ils ont un
        bon prix, ils travaillent dur et récupèrent les ruches perdues.
    </p>
    <p class="font2 fr">Cependant, si le prix tombe à 
                un niveau qui nest plus attractif, les producteurs arrêteront l&apos;apiculture. L&apos;abandon 
                entraîne une perte de ruches car les abeilles ne peuvent subvenir aux besoins de leur population 
                sans les soins des apiculteurs.</p>

    <h2 class="font1 en">Low prices, main threat to bees </h2>
    <p class="font2 en">
        A study published in 2015 shows that low honey prices are the main
        threat to honey bees, even above pesticides and pests, because although beekeepers lose hives due
        to pesticides or other threats, if honey They have a good price, they work hard and they recover
        the lost hives.
    </p>
    <p class="font2 en">However, if the price falls to a level that is no longer attractive, producers 
                will stop beekeeping. The abandonment leads to a loss of hives because the bees cannot sustain their 
                population without the care of the beekeepers.</p>';
}

    



function lowPricesAffectationsRow2()
{
    echo '
    <p class="font2 es">
    Muchos productores indígenas
    dependen de los ingresos que les reporta la apicultura. Los precios bajos afectan
    la economía campesina, ya de por sí muy precaria.
    </p>
    <p class="font2 es">
    La falsificación de la miel
    es un crimen que desalienta la apicultura.
    Menos abejas significa menos polinización y esto afecta la producción alimentaria.
    </p>

    
    <p class="font2 fr">
    De nombreux producteurs indigènes dépendent des revenus de 
    l&apos;apiculture. Les bas prix affectent l&apos;économie paysanne, déjà très précaire.</p>
    <p class="font2 fr">
    La contrefaçon du miel est un crime qui décourage l&apos;apiculture. Moins d&apos;abeilles signifie 
                moins de pollinisation et cela affecte la production alimentaire.</p>

    <p class="font2 en">
        Muchos productores indígenas
        dependen de los ingresos que les reporta la apicultura. Los precios bajos afectan
        la economía campesina, ya de por sí muy precaria.
    </p>
    <p class="font2 en">
    Counterfeiting honey is a crime that discourages beekeeping. Fewer bees means less pollination 
    and this affects food production.
    </p>';

}






function importPricesAffectationsMainEs()
{
    echo '<p class="text-consecuence font3 es">Precio de importación de la miel de origen chino como porcentaje del promedio del precio de la miel importada del resto del mundo</p>

    <p class="text-consecuence font3 fr">Prix ​​à l&apos;importation du miel d&apos;origine chinoise en pourcentage du prix moyen du miel importé du reste du monde</p>

    <p class="text-consecuence font3 en">Import price of honey of Chinese origin as a percentage of the average price of honey imported from the rest of the world</p>';
}

function honeySpendsAffectationsEs()
{
    echo '<p class="font4 es">“Cualquier miel vendiéndose a precios por debajo de la miel auténtica debería tomarse como adulterada.”
        </p>

        <p class="font5 es">Long Xuejun</p>
        <p class="font6 es">Secretario General</p>
        <p class="font6 es">Cámara de Productos de la Abeja, China</p>';
}
function honeySpendsAffectationsFr()
{
    echo '<p class="font4 fr">“Tout miel vendu à des prix inférieurs au vrai miel doit être considéré comme falsifié.”
        </p>

        <p class="font5 fr">Long Xuejun</p>
        <p class="font6 fr">Secrétaire général</p>
        <p class="font6 fr">Chambre des produits apicoles, Chine</p>';
}
function honeySpendsAffectationsEn()
{
    echo '<p class="font4 en">“Any honey selling at prices below real honey should be considered adulterated.”
        </p>

        <p class="font5 en">Long Xuejun</p>
        <p class="font6 en">General secretary</p>
        <p class="font6 en">Bee Products Chamber, China</p>';
}


function txtGuardiansEs()
{
    echo '<h2 class="font1 mb-5 es">Apicultores: guardianes de la biodiversidad.</h2>
            <p class="font2 es">Una serie de artículos científicos
                demuestran que los apicultores se han convertido en actores clave para la
                preservación del medio ambiente y la biodiversidad.</p>
                </p>
                <p class="font2 es">ULa apicultura preserva la naturaleza, la agricultura, mantiene los medios de vida
                y proporciona seguridad alimentaria. A pesar de estas importantes funciones de la
                apicultura, los potenciales de la apicultura aparentemente no se explotan en las
                actividades forestales. Los productos de abejas  proporcionan alimentos saludables y
                ricos en nutrientes, medicamentos seguros (apiterapia) y materia prima para
                las industrias.
            </p>';
}
function txtGuardiansFr()
{
    echo '<h2 class="font1 mb-5 fr">Apiculteurs: gardiens de la biodiversité.</h2>
            <p class="font2 fr">Une série d&apos;articles scientifiques démontrent 
            que les apiculteurs sont devenus des acteurs clés de la préservation de 
            l&apos;environnement et de la biodiversité.</p>

                <p class="font2 fr">L&apos;apiculture préserve la nature, l&apos;agriculture, maintient les 
                moyens de subsistance et assure la sécurité alimentaire. Malgré ces fonctions 
                importantes de l&apos;apiculture, les potentiels apicoles ne sont apparemment 
                pas exploités dans les activités forestières. Les produits apicoles fournissent 
                des aliments sains et riches en nutriments, des médicaments sûrs (apithérapie) 
                et des matières premières pour les industries.
            </p>';
}
function txtGuardiansEn()
{
    echo '<h2 class="font1 mb-5 en">Beekeepers: guardians of biodiversity.</h2>
            <p class="font2 en">A series of scientific articles demonstrate that beekeepers 
                have become key actors in preserving the environment and biodiversity.
                
                <p class="font2 en">Beekeeping preserves nature, agriculture, maintains livelihoods and provides food 
                security. Despite these important functions of beekeeping, beekeeping potentials are 
                apparently not exploited in forestry activities. Bee products provide healthy, 
                nutrient-rich foods, safe medications (apitherapy), and raw materials for industries.
            </p>';
}

/***************************
 * Fraude
****************************/

function fraudHome()
{
    echo '<h2 class="font1 es">El fraude que atenta contra';
    echo '<h2 class="font1 es">abejas, biodiversidad y apicultores</h2>';
    echo '<h2 class="font2 es">¿Cómo es posible?</h2>';

    echo '<h2 class="font1 fr">La fraude qui menace';
    echo '<h2 class="font1 fr">abeilles, biodiversité et apiculteurs</h2>';
    echo '<h2 class="font2 fr">Comment est-ce possible?</h2>';

    echo '<h2 class="font1 en">The fraud that threatens';
    echo '<h2 class="font1 en">bees, biodiversity and beekeepers</h2>';
    echo '<h2 class="font2 en">How is it possible?</h2>';
}

function factorsCol1FraudEs()
{
    echo '<h2 class="font1 es">Factores que posibilitan el fraude</h2>
            <p class="font2 es"><b>A. Análisis obsoletos
                </b></p> 
                <p class="font3 es">Una forma común de adulterar
                miel es añadirle jarabe a base de maíz o caña de azúcar. Ambas son plantas que para
                llevar a cabo la fotosíntesis emplean una vía metabólica de cuatro carbonos (plantas C4); sin 
                embargo, la composición de los azúcares en los jarabes elaborados a partir plantas C4 es muy 
                distinta a la de los azúcares de la miel, ya que las abejas liban néctar fundamentalmente
                de plantas con vía metabólica de tres carbonos (plantas C3) debido a que son las más
                abundantes (90%). Esta diferencia sustancial entre azúcares hace posible que el
                análisis usado para detectar jarabes C4
                (EA-IRMS5) sea suficientemente confiable.</p>
                
                <p class="font3 es">Por el contrario, los jarabes de plantas
                C3 como el arroz, trigo, betabel, yuca o papa son muy difíciles de detectar, puesto que
                la composición de sus azúcares puede ser muy similar a la de los azúcares de la miel.</p>
                
                <p class="font3 es">El LC-IRMS6 es el análisis más usado hoy en día para detectar jarabes C3 por haberse considerado 
                en su momento el más confiable, no obstante ha demostrado su ineficacia frente a la 
                sofisticación de los métodos para adulterar o falsificar miel, tras arrojar innumerables falsos 
                negativos así como también falsos positivos.</p>
                
                <p class="font3 es">Existen también análisis específicos para detectar algún marcador en particular,
                como el del betabel, pero de igual manera han presentado serios problemas de
                confiabilidad.
            </p>';
}
function factorsCol1FraudFr()
{
    echo '<h2 class="font1 fr">Facteurs qui permettent la fraude</h2>
            <p class="font2 fr"><b>A. Analyses obsolètes
                </b></p>
                <p class="font3 fr">Une façon courante d&apos;adultérer le miel est d&apos;ajouter du sirop de maïs ou de 
                la canne à sucre. Les deux sont des plantes qui effectuent la photosynthèse en utilisant 
                une voie métabolique à quatre carbones (plantes C4); Cependant, la composition des 
                sucres dans les sirops à base de plantes C4 est très différente de celle des sucres 
                de miel, car les abeilles sucent le nectar principalement des plantes avec une voie 
                métabolique à trois carbones (plantes C3) car ce sont les plus abondants (90%). Cette 
                différence substantielle entre les sucres permet que l&apos;analyse utilisée pour détecter 
                les sirops C4 (EA-IRMS5) soit suffisamment fiable.</p>
                
                <p class="font3 fr">En revanche, les sirops de plantes C3 tels que le riz, le blé, les betteraves, le manioc 
                ou les pommes de terre sont très difficiles à détecter, car la composition de leurs sucres 
                peut être très similaire à celle des sucres de miel.</p>
                
                <p class="font3 fr">Le LC-IRMS6 est le test le plus utilisé aujourd&apos;hui pour détecter les sirops C3 car il 
                était considéré comme le plus fiable à l&apos;époque, mais il sest révélé inefficace contre 
                la sophistication des méthodes pour falsifier ou falsifier le miel, après avoir lancé dinnombrables 
                faux négatifs. ainsi que les faux positifs.</p>
                
                <p class="font3 fr">Il existe également des tests spécifiques pour détecter un marqueur particulier, comme la betterave, 
                mais ils ont également présenté de sérieux problèmes de fiabilité.<br>
            </p>';
}
function factorsCol1FraudEn()
{
    echo '<h2 class="font1 en">Factors that enable fraud</h2>
            <p class="font2 en"><b>A. Obsolete analyzes
            </b></p>
            <p class="font3 en">A common way to adulterate honey is to add corn syrup or sugar cane. Both are plants that carry 
            out photosynthesis using a four-carbon metabolic pathway (C4 plants); However, the composition 
            of sugars in syrups made from C4 plants is very different from that of honey sugars, since bees 
            suck nectar mainly from plants with a three-carbon metabolic pathway (C3 plants) because they 
            are the most abundant (90%). This substantial difference between sugars makes it possible that 
            the analysis used to detect C4 syrups (EA-IRMS5) is sufficiently reliable.</p>
            
            <p class="font3 en">In contrast, C3 plant syrups such as rice, wheat, beets, cassava or potatoes are very difficult 
            to detect, since the composition of their sugars can be very similar to that of honey sugars.</p> 
             
            <p class="font3 en">The LC-IRMS6 is the most widely used test today to detect C3 syrups as it was considered the 
            most reliable at the time, however it has proven ineffective against the sophistication of 
            methods to adulterate or falsify honey, after throwing countless false negatives as well as 
            false positives.</p>

            <p class="font3 en">There are also specific tests to detect any particular marker, such as beet, but they have 
            also presented serious reliability problems.
            </p>';
}



function factorsCol1Row1()
{
    echo '<h2 class="font1 es">Factores que posibilitan el fraude</h2>
            <p class="font2 es"><b>A. Análisis obsoletos</b></p> 
            <p class="font3 es">Una forma común de adulterar
            miel es añadirle jarabe a base de maíz o caña de azúcar. Ambas son plantas que para
            llevar a cabo la fotosíntesis emplean una vía metabólica de cuatro carbonos (plantas C4); sin 
            embargo, la composición de los azúcares en los jarabes elaborados a partir plantas C4 es muy 
            distinta a la de los azúcares de la miel, ya que las abejas liban néctar fundamentalmente
            de plantas con vía metabólica de tres carbonos (plantas C3) debido a que son las más
            abundantes (90%). Esta diferencia sustancial entre azúcares hace posible que el
            análisis usado para detectar jarabes C4
            (EA-IRMS5) sea suficientemente confiable.</p>
                


        <h2 class="font1 fr">Facteurs qui permettent la fraude</h2>
            <p class="font2 fr"><b>A. Analyses obsolètes</b></p>
            <p class="font3 fr">Une façon courante d&apos;adultérer le miel est d&apos;ajouter du sirop de maïs ou de 
            la canne à sucre. Les deux sont des plantes qui effectuent la photosynthèse en utilisant 
            une voie métabolique à quatre carbones (plantes C4); Cependant, la composition des 
            sucres dans les sirops à base de plantes C4 est très différente de celle des sucres 
            de miel, car les abeilles sucent le nectar principalement des plantes avec une voie 
            métabolique à trois carbones (plantes C3) car ce sont les plus abondants (90%). Cette 
            différence substantielle entre les sucres permet que l&apos;analyse utilisée pour détecter 
            les sirops C4 (EA-IRMS5) soit suffisamment fiable.</p>
                


        <h2 class="font1 en">Factors that enable fraud</h2>
            <p class="font2 en"><b>A. Obsolete analyzes</b></p>
            <p class="font3 en">A common way to adulterate honey is to add corn syrup or sugar cane. Both are plants that carry 
            out photosynthesis using a four-carbon metabolic pathway (C4 plants); However, the composition 
            of sugars in syrups made from C4 plants is very different from that of honey sugars, since bees 
            suck nectar mainly from plants with a three-carbon metabolic pathway (C3 plants) because they 
            are the most abundant (90%). This substantial difference between sugars makes it possible that 
            the analysis used to detect C4 syrups (EA-IRMS5) is sufficiently reliable.</p>';
            

}

function factorsCol1Row2()
{
    echo '      
               <p class="font3 es">Por el contrario, los jarabes de plantas
                C3 como el arroz, trigo, betabel, yuca o papa son muy difíciles de detectar, puesto que
                la composición de sus azúcares puede ser muy similar a la de los azúcares de la miel.</p>
                
                <p class="font3 es">El LC-IRMS6 es el análisis más usado hoy en día para detectar jarabes C3 por haberse considerado 
                en su momento el más confiable, no obstante ha demostrado su ineficacia frente a la 
                sofisticación de los métodos para adulterar o falsificar miel, tras arrojar innumerables falsos 
                negativos así como también falsos positivos.</p>
                
                <p class="font3 es">Existen también análisis específicos para detectar algún marcador en particular,
                como el del betabel, pero de igual manera han presentado serios problemas de
                confiabilidad.</p>
          

                
                <p class="font3 fr">En revanche, les sirops de plantes C3 tels que le riz, le blé, les betteraves, le manioc 
                ou les pommes de terre sont très difficiles à détecter, car la composition de leurs sucres 
                peut être très similaire à celle des sucres de miel.</p>
                
                <p class="font3 fr">Le LC-IRMS6 est le test le plus utilisé aujourd&apos;hui pour détecter les sirops C3 car il 
                était considéré comme le plus fiable à l&apos;époque, mais il sest révélé inefficace contre 
                la sophistication des méthodes pour falsifier ou falsifier le miel, après avoir lancé dinnombrables 
                faux négatifs. ainsi que les faux positifs.</p>
                
                <p class="font3 fr">Il existe également des tests spécifiques pour détecter un marqueur particulier, comme la betterave, 
                mais ils ont également présenté de sérieux problèmes de fiabilité.</p>
           

            
            <p class="font3 en">In contrast, C3 plant syrups such as rice, wheat, beets, cassava or potatoes are very difficult 
            to detect, since the composition of their sugars can be very similar to that of honey sugars.</p> 
             
            <p class="font3 en">The LC-IRMS6 is the most widely used test today to detect C3 syrups as it was considered the 
            most reliable at the time, however it has proven ineffective against the sophistication of 
            methods to adulterate or falsify honey, after throwing countless false negatives as well as 
            false positives.</p>

            <p class="font3 en">There are also specific tests to detect any particular marker, such as beet, but they have 
            also presented serious reliability problems.</p>';
}



function factorsCol2FraudEs()
{
    echo '
                <p class="font2 es"><b>B. Dosificación de alta precisión</b></p> 
                <p class="font3 es">La miel pura contiene indefectiblemente cierta
                cantidad de polen (hasta 0.5%) y de cierto tipo, desde luego el asociado a la botánica
                y la geografía de la zona en la que
                se encuentra el apiario.</p> 
                <p class="font3 es">Así mismo, la diastasa y la prolina –una enzima y un aminoacido
                respectivamente– deben estar presentes en la miel en ciertas cantidades.</p>
                <p class="font3 es">Para disfrazar al jarabe de miel, se le incorporan estos tres ingredientes – por
                cierto de amplia disponibilidad en el mercado - mediante dosificadoras de alta precisión.</p>
                
                <p class="font2 es"><b>C. Insumos abundantes y económicos</b></p> 
                <p class="font3 es">Mientras que la tonelada de miel tiene un precio
                internacional de US$ 3,000.00, el precio promedio de los jarabes es seis veces menor:  US$ 500.00.</p>
                </p>
                <p class="font3 es">Adicionalmente, la producción mundial de miel es de 1.5 millones de toneladas al año, 
                muy por debajo de las más de 2,390 millones de toneladas anuales de betabel, arroz, yuca, 
                trigo y papa, fuente enorme de insumos para elaborar jarabes.</p>
                
                <p class="font2 es"><b>D. Purificación con tecnología de resinas</b></p> 
                <p class="font3 es">Para eliminar las sustancias que delaten la
                adulteración o falsificación de la miel, se emplea la tecnología de limpieza a base
                de resinas poliméricas, servicio ofrecido abiertamente por varias empresas.
            </p>';
}
function factorsCol2FraudFr()
{
    echo '
                <p class="font2 fr">
                <b>B. Dosage de haute précision</b></p> 
                <p class="font3 fr">Le miel pur contient immanquablement une certaine quantité 
                de pollen (jusqu&apos;à 0,5%) et d&apos;un certain type, bien sûr associé à la botanique et 
                à la géographie de la zone où se trouve le rucher.</p>
                
                <p class="font3 fr">De même, la diastase et la proline - une enzyme et un acide aminé respectivement - doivent 
                être présentes dans le miel en certaines quantités.</p>
                 
                <p class="font3 fr">Pour masquer le sirop de miel, ces trois ingrédients sont incorporés - certainement 
                largement disponibles sur le marché - à l&apos;aide de distributeurs de haute précision.</p>
                
                <p class="font2 fr"><b>C. Intrants abondants et économiques</b></p>
                <p class="font3 fr">Alors que la tonne de miel a un prix international 
                de 3 000,00 $ US, le prix moyen des sirops est six fois inférieur: 500,00 $ US.</p>
                
                <p class="font3 fr">De plus, la production mondiale de miel est de 1,5 million de tonnes par an, bien en deçà 
                des 2,39 millions de tonnes de betteraves, riz, manioc, blé et pommes de terre par an, une 
                énorme source d&apos;intrants pour la fabrication de sirops.</p>
                
                <p class="font2 fr"><b>D. Purification avec la technologie des résines</b></p> 
                <p class="font3 fr">Pour éliminer les substances révélatrices 
                de falsification ou de falsification du miel, une technologie de nettoyage à base de résines 
                polymériques est utilisée, un service offert ouvertement par plusieurs sociétés.
            </p>';
}
function factorsCol2FraudEn()
{
    echo '
                <p class="font2 en">
                <b>B. High-precision dosing</b></p> 
                <p class="font3 en">Pure honey unfailingly contains a certain amount of pollen 
                (up to 0.5%) and of a certain type, of course that associated with the botany and geography 
                of the area where the apiary is found.</p>
                 
                <p class="font3 en">Likewise, diastase and proline - an enzyme and an amino acid respectively - must be 
                present in honey in certain amounts.</p>
                 
                <p class="font3 en">To disguise honey syrup, these three ingredients are incorporated - certainly widely available on the market - using high-precision dispensers.</p>
                
                <p class="font2 en"><b>C. Abundant and cheap inputs</b></p>
                <p class="font3 en">While the ton of honey has an international price of 
                US $ 3,000.00, the average price of syrups is six times lower: US $ 500.00.</p>
                 
                <p class="font3 en">Additionally, world honey production is 1.5 million tons per year, well below the more than 
                2.39 million tons per year of beets, rice, cassava, wheat and potatoes, a huge source of 
                inputs for making syrups.</p>
                
                <p class="font2 en"><b>D. Purification with resin technology</b></p>
                <p class="font3 en">To eliminate substances that reveal 
                adulteration or falsification of honey, cleaning technology based on polymeric 
                resins is used, a service offered openly by several companies.
            </p>';
}


function factorsCol2Row1()
{
    echo '
                <p class="font2 es"><b>B. Dosificación de alta precisión</b></p> 
                <p class="font3 es">La miel pura contiene indefectiblemente cierta
                cantidad de polen (hasta 0.5%) y de cierto tipo, desde luego el asociado a la botánica
                y la geografía de la zona en la que
                se encuentra el apiario.</p> 
                <p class="font3 es">Así mismo, la diastasa y la prolina –una enzima y un aminoacido
                respectivamente– deben estar presentes en la miel en ciertas cantidades.</p>
                <p class="font3 es">Para disfrazar al jarabe de miel, se le incorporan estos tres ingredientes – por
                cierto de amplia disponibilidad en el mercado - mediante dosificadoras de alta precisión.</p>

                <p class="font2 fr">
                <b>B. Dosage de haute précision</b></p> 
                <p class="font3 fr">Le miel pur contient immanquablement une certaine quantité 
                de pollen (jusqu&apos;à 0,5%) et d&apos;un certain type, bien sûr associé à la botanique et 
                à la géographie de la zone où se trouve le rucher.</p>
                
                <p class="font3 fr">De même, la diastase et la proline - une enzyme et un acide aminé respectivement - doivent 
                être présentes dans le miel en certaines quantités.</p>
                 
                <p class="font3 fr">Pour masquer le sirop de miel, ces trois ingrédients sont incorporés - certainement 
                largement disponibles sur le marché - à l&apos;aide de distributeurs de haute précision.</p>

                <p class="font2 en">
                <b>B. High-precision dosing</b></p> 
                <p class="font3 en">Pure honey unfailingly contains a certain amount of pollen 
                (up to 0.5%) and of a certain type, of course that associated with the botany and geography 
                of the area where the apiary is found.</p>
                 
                <p class="font3 en">Likewise, diastase and proline - an enzyme and an amino acid respectively - must be 
                present in honey in certain amounts.</p>
                 
                <p class="font3 en">To disguise honey syrup, these three ingredients are incorporated - certainly widely available on the market - using high-precision dispensers.</p>
                ';
}

function factorsCol2Row2()
{
    echo '
                <p class="font2 es"><b>C. Insumos abundantes y económicos</b></p> 
                <p class="font3 es">Mientras que la tonelada de miel tiene un precio
                internacional de US$ 3,000.00, el precio promedio de los jarabes es seis veces menor:  US$ 500.00.</p>
                </p>
                <p class="font3 es">Adicionalmente, la producción mundial de miel es de 1.5 millones de toneladas al año, 
                muy por debajo de las más de 2,390 millones de toneladas anuales de betabel, arroz, yuca, 
                trigo y papa, fuente enorme de insumos para elaborar jarabes.</p>
                
                <p class="font2 es"><b>D. Purificación con tecnología de resinas</b></p> 
                <p class="font3 es">Para eliminar las sustancias que delaten la
                adulteración o falsificación de la miel, se emplea la tecnología de limpieza a base
                de resinas poliméricas, servicio ofrecido abiertamente por varias empresas.
                </p>

               <p class="font2 fr"><b>C. Intrants abondants et économiques</b></p>
                <p class="font3 fr">Alors que la tonne de miel a un prix international 
                de 3 000,00 $ US, le prix moyen des sirops est six fois inférieur: 500,00 $ US.</p>
                
                <p class="font3 fr">De plus, la production mondiale de miel est de 1,5 million de tonnes par an, bien en deçà 
                des 2,39 millions de tonnes de betteraves, riz, manioc, blé et pommes de terre par an, une 
                énorme source d&apos;intrants pour la fabrication de sirops.</p>
                
                <p class="font2 fr"><b>D. Purification avec la technologie des résines</b></p> 
                <p class="font3 fr">Pour éliminer les substances révélatrices 
                de falsification ou de falsification du miel, une technologie de nettoyage à base de résines 
                polymériques est utilisée, un service offert ouvertement par plusieurs sociétés.
                </p>

             <p class="font2 en"><b>C. Abundant and cheap inputs</b></p>
                <p class="font3 en">While the ton of honey has an international price of 
                US $ 3,000.00, the average price of syrups is six times lower: US $ 500.00.</p>
                 
                <p class="font3 en">Additionally, world honey production is 1.5 million tons per year, well below the more than 
                2.39 million tons per year of beets, rice, cassava, wheat and potatoes, a huge source of 
                inputs for making syrups.</p>
                
                <p class="font2 en"><b>D. Purification with resin technology</b></p>
                <p class="font3 en">To eliminate substances that reveal 
                adulteration or falsification of honey, cleaning technology based on polymeric 
                resins is used, a service offered openly by several companies.
            </p>';
}



function backgroundFraudEs()
{
    echo '<h2 class="font1 es">Antecedentes del fraude</h2>
            <p class="font2 es">Aun con un entorno adverso que compromete la
                producción y una demanda en constante alza, sorpresivamente los precios caen.</p>
                
                <p class="font2 es">A diferencia de lo que ocurre en América, en algunos países
                de Asia se presenta una relación acentuadamente anormal entre el incremento de colmenas
                y el crecimiento de las exportaciones.</p>
                
                <p class="font2 es">El precio de la “miel” china está a la midad del valor internacional, lo que 
                contradice la racionalidad del mercado.</p>
                
                <p class="font2 es">Se han documentado múltiples hallazgos de adulteración masiva de “miel” de origen 
                asiático exportada a Europa y Estados Unidos. Un tercio de la miel exportada es china
            </p>';
}
function backgroundFraudFr()
{
    echo '<h2 class="font1 fr">Contexte de fraude</h2>
            <p class="font2 fr">Même avec un environnement défavorable qui compromet 
                la production et une demande en constante augmentation, les prix baissent de manière surprenante.</p>
                
                <p class="font2 fr">Contrairement à ce qui se passe en Amérique, dans certains pays asiatiques, 
                il existe une relation nettement anormale entre l&apos;augmentation des ruches et la croissance des 
                exportations.</p>
                
                <p class="font2 fr">Le prix du «miel» chinois représente la moitié de la valeur internationale, ce qui 
                contredit la rationalité du marché.</p>
                
                <p class="font2 fr">De multiples découvertes de falsification massive de "miel" asiatique exporté vers l&apos;Europe et 
                les États-Unis ont été documentées. Un tiers du miel exporté est chinois.
            </p>';
}
function backgroundFraudEn()
{
    echo '<h2 class="font1 en">Fraud Background</h2>
            <p class="font2 en">Even with an adverse environment that compromises 
                production and a constantly rising demand, prices surprisingly fall.</p>
                
                <p class="font2 en">Contrary to what happens in America, in some Asian countries there is a markedly 
                abnormal relationship between the increase in hives and the growth of exports.</p>
                
                <p class="font2 en">The price of Chinese "honey" is half the international value, which contradicts the 
                rationality of the market.</p>

                <p class="font2 en">Multiple findings of massive adulteration of Asian "honey" exported to Europe and 
                the United States have been documented. A third of the honey exported is Chinese.
            </p>';
}

/**********************************
 * Import Export
********************************/

function importExportEs()
{
    echo '<h2 class="es"> <spam class="font1">Países</spam> </h2>
            <h2 class="es"> <spam class="font2">importadores</spam> </h2>
            <h2 class="es"> <spam class="font1">y</spam> </h2>
            <h2 class="es"><spam class="font3">exportadores</spam> </h2>
            <h2 class="es"> <spam class="font1"> de miel falsa</spam> </h2>';
}
function importExportFr()
{
    echo '<h2 class="fr"> <spam class="font1">Les pays</spam> </h2>
            <h2 class="fr"> <spam class="font2">importateurs</spam> </h2>
            <h2 class="fr"> <spam class="font1">et</spam> </h2>
            <h2 class="fr"> <spam class="font3">exportateurs</spam> </h2>
            <h2 class="fr"> <spam class="font1">faux miel</spam> </h2>';
}
function importExportEn()
{
    echo '  <h2 class="en"> <spam class="font1">Countries</spam> </h2>
            <h2 class="en"> <spam class="font2">importers</spam> </h2>
            <h2 class="en"> <spam class="font1">and</spam> </h2>
            <h2 class="en"> <spam class="font3">exporters</spam> </h2>
            <h2 class="en"> <spam class="font1">honey</spam> </h2>';
}

function lauderingHeaderImportExportEs()
{
    echo '<h2 class="font1 es">Estados Unidos y la miel china</h2>
            <h3 class="font2 es">¿Se repite el honey laundering?</h3>';
}
function lauderingHeaderImportExportFr()
{
    echo '<h2 class="font1 fr">États-Unis et miel chinois</h2>
            <h3 class="font2 fr">Le blanchiment du miel se répète-t-il?</h3>';
}
function lauderingHeaderImportExportEn()
{
    echo '<h2 class="font1 en">United States and Chinese honey</h2>
            <h3 class="font2 en">Does honey laundering repeat?</h3>';
}

function lauderingImportExportEs()
{
    echo '<div class="col-12 es">
            <div class="es">
                <p class="mb-6 font3 es">En el año 2000 E.U.A. impuso una tarifa anti-dumping
                    a la importación de miel china debido a prácticas comerciales desleales que 
                    posibilitaban precios muy pordebajo del valor de mercado.
                    <br> 
                    A partir de ello, al mismo tiempo que las importaciones de miel china
                    decrecían, las importaciones procedentes de otros páises, que históricamente 
                    no producían o exportaban grandes cantidades de miel, aumentaban anormalmente.
                    <br> 
                    Una investigación federal reveló el esquema de
                </p>
           
                <p class="mb-6 font3 es">importación ilegal de miel china a través de países
                    intermediarios (Rusia, India, Indonesia, Malasia, Mongolia, Filipinas, Corea
                    del Sur, Taiwán y Tailandia) que permitió la evasión de 80 mdd de
                    tarifa anti-dumping entre 2002 y 2008.
                    <br> Como resultado de la investigación se acusó a seis compañías y once individuos 
                    de conspiración global para la importación ilegal de miel china en E.U.A.
                    (Honey laundering).
                    <br> La tarifa anti-dumping se mantiene hasta la fecha.

                </p>
            </div>
        </div>';
}
function lauderingImportExportFr()
{
    echo '<div class="col-12 fr">
            <div class="fr">
                <p class="mb-6 font3 fr">En l&apos;an 2000, E.U.A. a imposé un droit antidumping sur 
                l&apos;importation de miel chinois en raison de pratiques commerciales déloyales qui ont permis 
                que les prix soient bien inférieurs à la valeur marchande.
                    <br> 
                    En conséquence, alors que les importations de miel chinois ont diminué, les importations 
                    en provenance d&apos;autres pays, qui historiquement ne produisaient ni n&apos;exportaient de grandes
                     quantités de miel, ont augmenté anormalement.
                    <br> 
                    Une enquête fédérale a révélé le régime
                </p>
          
          
                <p class="mb-6 font3 fr">importation illégale de miel chinois via des pays intermédiaires 
                (Russie, Inde, Indonésie, Malaisie, Mongolie, Philippines, Corée du Sud, Taïwan et Thaïlande) 
                qui ont permis l&apos;évasion de 80 millions de dollars de droits antidumping entre 2002 et 2008.
                    <br> 
                    À la suite de l&apos;enquête, six entreprises et onze personnes ont été accusées 
                    de complot mondial visant à importer illégalement du miel chinois aux États-Unis. 
                    (Blanchiment du miel).
                    <br>
                    Le taux antidumping est maintenu à ce jour.
                </p>
            </div>
        </div>';
}
function lauderingImportExportEn()
{
    echo '<div class="col-12 en">
            <div class="en">
                    <p class="mb-6 font3 en">In the year 2000 E.U.A. imposed an anti-dumping tariff 
                    on the importation of Chinese honey due to unfair commercial practices that allowed 
                    prices to be well below market value.
                        <br> 
                        Thereafter, at the same time that Chinese honey imports decreased, imports from 
                        other countries, which historically did not produce or export large quantities 
                        of honey, increased abnormally.
                        <br> 
                        A federal investigation revealed the scheme
                    </p>
           
                <p class="mb-6 font3 en">illegal importation of Chinese honey through intermediary 
                countries (Russia, India, Indonesia, Malaysia, Mongolia, the Philippines, South Korea, 
                Taiwan and Thailand) that allowed the evasion of 80 million dollars of anti-dumping 
                tariff between 2002 and 2008.
                    <br> 
                    As a result of the investigation, six companies and eleven individuals were charged 
                    with a global conspiracy to illegally import Chinese honey into the U.S. 
                    (Honey laundering).
                    <br> 
                    The anti-dumping rate is maintained to date.
                </p>
            </div>
        </div>';
}



function lauderingImportExportRow1()
{
    echo '<div class="padding-import-export es">
    <p class="font3 es">En el año 2000 E.U.A. impuso una tarifa anti-dumping
        a la importación de miel china debido a prácticas comerciales desleales que
        posibilitaban precios muy pordebajo del valor de mercado.</p>
        
        <p class="font3 es">A partir de ello, al mismo tiempo que las importaciones de miel china
        decrecían, las importaciones procedentes de otros páises, que históricamente
        no producían o exportaban grandes cantidades de miel, aumentaban anormalmente.
    </p>
</div>

<div class="padding-import-export fr">
        <p class="font3 fr">En l&apos;an 2000, E.U.A. a imposé un droit antidumping sur
            l&apos;importation de miel chinois en raison de pratiques commerciales déloyales qui ont permis
            que les prix soient bien inférieurs à la valeur marchande.</p>
            
            <p class="font3 fr">En conséquence, alors que les importations de miel chinois ont diminué, les importations
            en provenance d&apos;autres pays, qui historiquement ne produisaient ni n&apos;exportaient de grandes
            quantités de miel, ont augmenté anormalement.
        </p>
    </div>

    <div class="padding-import-export en">
        <p class="font3 en">In the year 2000 E.U.A. imposed an anti-dumping tariff
            on the importation of Chinese honey due to unfair commercial practices that allowed
            prices to be well below market value.</p>
            
            <p class="font3 en">Thereafter, at the same time that Chinese honey imports decreased, imports from
            other countries, which historically did not produce or export large quantities
            of honey, increased abnormally.
        </p>
    </div>';
}


function lauderingImportExportRow2()
{
    echo '<div class="padding-import-export es">
    <p class="font3 es">Una investigación federal reveló el esquema de importación ilegal de miel china a través de países
        intermediarios (Rusia, India, Indonesia, Malasia, Mongolia, Filipinas, Corea
        del Sur, Taiwán y Tailandia) que permitió la evasión de 80 mdd de
        tarifa anti-dumping entre 2002 y 2008.</p>
         
        <p class="font3 es">Como resultado de la investigación se acusó a seis compañías y once individuos
        de conspiración global para la importación ilegal de miel china en E.U.A.
        (Honey laundering).</p>
        
        <p class="font3 es">La tarifa anti-dumping se mantiene hasta la fecha.

    </p>
</div>

<div class="padding-import-export fr">
        <p class="font3 fr">Une enquête fédérale a révélé le régime importation illégale de miel chinois via des pays intermédiaires
            (Russie, Inde, Indonésie, Malaisie, Mongolie, Philippines, Corée du Sud, Taïwan et Thaïlande)
            qui ont permis l&apos;évasion de 80 millions de dollars de droits antidumping entre 2002 et 2008.</p>
            
            <p class="font3 fr">À la suite de l&apos;enquête, six entreprises et onze personnes ont été accusées
            de complot mondial visant à importer illégalement du miel chinois aux États-Unis.
            (Blanchiment du miel).</p>
            
            <p class="font3 fr">Le taux antidumping est maintenu à ce jour.
        </p>
    </div>

    <div class="padding-import-export en">
        <p class="font3 en">A federal investigation revealed the scheme illegal importation of Chinese honey through intermediary
            countries (Russia, India, Indonesia, Malaysia, Mongolia, the Philippines, South Korea,
            Taiwan and Thailand) that allowed the evasion of 80 million dollars of anti-dumping
            tariff between 2002 and 2008.</p>
            
            <p class="font3 en">As a result of the investigation, six companies and eleven individuals were charged
            with a global conspiracy to illegally import Chinese honey into the U.S.
            (Honey laundering).</p>
            </p>
            <p class="font3 en">The anti-dumping rate is maintained to date.
        </p>
    </div>';

}


function lauderingImportExportColumn()
{
    echo '<div class="padding-import-export es">
    <p class="mb-6 font3 es">En el año 2000 E.U.A. impuso una tarifa anti-dumping
        a la importación de miel china debido a prácticas comerciales desleales que
        posibilitaban precios muy pordebajo del valor de mercado.
        <br>
        A partir de ello, al mismo tiempo que las importaciones de miel china
        decrecían, las importaciones procedentes de otros páises, que históricamente
        no producían o exportaban grandes cantidades de miel, aumentaban anormalmente.
        <br>
        Una investigación federal reveló el esquema de importación ilegal de miel china a través de países
        intermediarios (Rusia, India, Indonesia, Malasia, Mongolia, Filipinas, Corea
        del Sur, Taiwán y Tailandia) que permitió la evasión de 80 mdd de
        tarifa anti-dumping entre 2002 y 2008.
        <br> Como resultado de la investigación se acusó a seis compañías y once individuos
        de conspiración global para la importación ilegal de miel china en E.U.A.
        (Honey laundering).
        <br> La tarifa anti-dumping se mantiene hasta la fecha.
        <br><br><br><br>
    </p>
</div>

<div class="padding-import-export fr">
        <p class="mb-6 font3 fr">En l&apos;an 2000, E.U.A. a imposé un droit antidumping sur
            l&apos;importation de miel chinois en raison de pratiques commerciales déloyales qui ont permis
            que les prix soient bien inférieurs à la valeur marchande.
            <br>
            En conséquence, alors que les importations de miel chinois ont diminué, les importations
            en provenance d&apos;autres pays, qui historiquement ne produisaient ni n&apos;exportaient de grandes
            quantités de miel, ont augmenté anormalement.
            <br>
            Une enquête fédérale a révélé le régime importation illégale de miel chinois via des pays intermédiaires
            (Russie, Inde, Indonésie, Malaisie, Mongolie, Philippines, Corée du Sud, Taïwan et Thaïlande)
            qui ont permis l&apos;évasion de 80 millions de dollars de droits antidumping entre 2002 et 2008.
            <br>
            À la suite de l&apos;enquête, six entreprises et onze personnes ont été accusées
            de complot mondial visant à importer illégalement du miel chinois aux États-Unis.
            (Blanchiment du miel).
            <br>
            Le taux antidumping est maintenu à ce jour.
            <br><br><br><br>
        </p>
    </div>

    <div class="padding-import-export en">
        <p class="mb-6 font3 en">In the year 2000 E.U.A. imposed an anti-dumping tariff
            on the importation of Chinese honey due to unfair commercial practices that allowed
            prices to be well below market value.
            <br>
            Thereafter, at the same time that Chinese honey imports decreased, imports from
            other countries, which historically did not produce or export large quantities
            of honey, increased abnormally.
            <br>
            A federal investigation revealed the scheme illegal importation of Chinese honey through intermediary
            countries (Russia, India, Indonesia, Malaysia, Mongolia, the Philippines, South Korea,
            Taiwan and Thailand) that allowed the evasion of 80 million dollars of anti-dumping
            tariff between 2002 and 2008.
            <br>
            As a result of the investigation, six companies and eleven individuals were charged
            with a global conspiracy to illegally import Chinese honey into the U.S.
            (Honey laundering).
            <br>
            The anti-dumping rate is maintained to date.
            <br><br><br><br>
        </p>
    </div>';
}



function messageImportExportEs()
{
    echo '<p class=" font4 es"> Actualmente las importaciones de miel de Viet Nam, India,
            Ucrania y Tailandia en E.U.A. presentan características que sugieren que
            éstos son países intermediarios de China: crecimiento anormal
            y precios bajos.
        </p>';
}
function messageImportExportFr()
{
    echo '<p class=" font4 fr"> Importe actuellement du miel du Viet Nam, de l&apos;Inde, 
    de l&apos;Ukraine et de la Thaïlande aux États-Unis. Ils présentent des caractéristiques qui 
    suggèrent qu&apos;il s&apos;agit de pays intermédiaires en Chine: croissance anormale et prix bas.
        </p>';
}
function messageImportExportEn()
{
    echo '<p class=" font4 en"> Currently imports of honey from Viet Nam, India, Ukraine 
    and Thailand in the U.S. They have characteristics that suggest that these are intermediary 
    countries in China: abnormal growth and low prices.
        </p>';
}

function impactImportExportEs()
{
    echo '<h2 class="font1 es">Importaciones de miel de China en la Unión Europea</h2>
            <h3 class="font2 es">Impactante crecimiento en las importaciones del Reino Unido</h3>';
}
function impactImportExportFr()
{
    echo '<h2 class="font1 fr">Shocking growth in UK imports</h2>
            <h3 class="font2 fr">Croissance choquante des importations britanniques</h3>';
}
function impactImportExportEn()
{
    echo '<h2 class="font1 en">Imports of honey from China into the European Union</h2>
            <h3 class="font2 en">Shocking growth in UK imports</h3>';
}