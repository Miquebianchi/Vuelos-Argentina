<?php require_once("./templates/header.php") ?>
<br>
<main>
<div class="busqueda" id="busqueda">
    <h2 class="titulovuelo">Buscar vuelo</h2>
    <form class="formvuelo" method="POST" action="#" onsubmit="return mostrarOpcionesPago(event)">
        <label for="origen">Origen:</label>
        <select id="origen" name="origen">
            <option value="Ezeiza">Ezeiza</option>
            <option value="Olavarria">Olavarria</option>
            <option value="Cordoba">Cordoba</option>
        </select>

        <label for="destino">Destino:</label>
        <select id="destino" name="destino">
            <option value="rio">Rio de Janeiro</option>
            <option value="guadalajara">Guadalajara</option>
            <option value="japon">Japón</option>
        </select>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha">

        <input type="hidden" id="nombre_usuario" name="nombre_usuario" value="<?php echo $nombre_usuario; ?>">
        <input type="submit" value="Buscar">
    </form>
</div>
<div id="mensaje"></div>
<div id="opcionesPago" style="display: none;">
        <h3>Método de pago:</h3>
        <label for="tarjeta">Tarjeta de crédito:</label>
        <input type="text" id="tarjeta" name="tarjeta">

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv">

        <input type="submit" value="Pagar">
        <div id="confirmacionPago" style="display: none;">
            <h3>¡Vuelo pagado exitosamente!</h3>
            <p>Ingrese su correo electrónico para enviarle los boletos:</p>
            <input type="email" id="email" name="email">
            <button onclick="enviarBoletos()">Enviar boletos</button>
        </div>
    </div>

</section class="pagos">
    <div id="formas-pago">
        <h3 class="pagos">Formas de pago</h3>
        <ul class="tarjetas">
            <li class="img"><img src="./img/tarjeta visa.jpg" alt="Visa Credito/Debito"></li>
            <li class="img"><img src="./img/tarjeta master.png" alt="Mastercad Credito/Debito"></li>
            <li class="img"><img src="./img/naraja X.png" alt="Tarjeta Naranja X"></li>
        </ul>
</div>

<section>

    <div class="elemento">
        <h2>Rio de Janeiro</h2>
            <img src="./img/ViajeaRio.jpg" alt="imagen 1" srcset="">
                <p class="recomendacion">Estamos encantados de recomendarte un emocionante viaje a Río de Janeiro, una ciudad llena de encanto, cultura y belleza natural. Permítenos llevarte a este destino deslumbrante, donde las playas de arena blanca se encuentran con majestuosas montañas y una vibrante vida urbana.Al aterrizar en Río de Janeiro, te sumergirás en una ciudad llena de vida y energía. 
                Pasea por las hermosas playas de Copacabana e Ipanema, donde podrás disfrutar de aguas cristalinas y tomar el sol bajo el cielo azul. Aprovecha la oportunidad de probar deliciosos platos de la cocina brasileña en los numerosos restaurantes y bares a lo largo de la costa. 
                No te pierdas la emblemática estatua del Cristo Redentor en la cima del monte Corcovado. Desde allí, contemplarás una vista panorámica incomparable de la ciudad, con sus rascacielos, lagunas y selvas tropicales.</p>

    </div>

    <div class="elemento">
        <h2>Guadalajara</h2>
            <img src="./img/ViajeaGuadalajara.jpg" alt="imagen 2" srcset="">
                <p class="recomendacion">Al llegar a Guadalajara, te sumergirás en una ciudad llena de colores vibrantes y una rica herencia cultural. Explora el centro histórico, con sus impresionantes edificios coloniales, plazas encantadoras y una gran cantidad de iglesias antiguas. No te pierdas la majestuosa Catedral de Guadalajara, un monumento icónico que te dejará sin aliento.
                La gastronomía de Guadalajara es una delicia para los sentidos. Saborea la auténtica cocina mexicana, desde los famosos tacos al pastor hasta los suculentos platillos tradicionales como la birria y la torta ahogada. Además, te invitamos a degustar el tequila y el mezcal, dos licores emblemáticos de México que podrás disfrutar en los bares y cantinas locales.
                Sumérgete en la cultura mariachi, ya que Guadalajara es considerada la cuna de esta tradición musical. Pasea por el famoso Mercado de San Juan de Dios, donde encontrarás artesanías mexicanas, ropa típica y una variedad de souvenirs para llevar a casa. También te recomendamos visitar el Instituto Cultural Cabañas, declarado Patrimonio de la Humanidad por la UNESCO, donde podrás apreciar obras de arte y exposiciones fascinantes.</p>
    </div>

    <div class="elemento">
        <h2>Japon</h2>
            <img src="./img/ViajeaJapon.jpg" alt="imagen 3" srcset="">
                <p class="recomendacion">Al llegar a Japón, te sumergirás en una tierra de maravillas. Desde la bulliciosa ciudad de Tokio, con su futurista arquitectura y luces deslumbrantes, hasta la histórica ciudad de Kioto, con sus antiguos templos y jardines serenos, cada destino te sorprenderá con su belleza y encanto único.
                Descubre la deliciosa gastronomía japonesa, reconocida en todo el mundo. Prueba el sushi fresco, los fideos ramen humeantes, el sabroso okonomiyaki y muchas otras exquisiteces culinarias que harán que tus papilas gustativas se deleiten. Además, podrás experimentar la ceremonia del té, una tradición milenaria que te sumergirá en la cultura japonesa.
                Explora los templos y santuarios antiguos que se encuentran por todo el país. Desde el majestuoso Templo Senso-ji en Tokio hasta el famoso Santuario Fushimi Inari en Kioto, cada sitio sagrado te transportará a un mundo de espiritualidad y paz.</p>
</div>

</section>


<div class="textonosotros">
    <h3>¿Porque nos deberias elegir?</h3>
    <p>&nbsp;</p>
    <p>Volar y viajar con nuestra aerolinea te garantiza seguridad, comodidad y lujo. Te acompañamos a conocer nuevos destinos, descubrir paisajes hermosos y sin precedentes, pero sobre todo, hacemos de tu viaje una expreciencia unica. Contamos con los mejores aviones equipados para que todo su trayecto sea satisfactorio, y los empleados mas capacitados que le brindaran todo aquello que siempre deseo en un vuelo.</p>
    <p>Recorda que si es tu primera vez, hacelo saber a las azafatas, y ellas te haran un increible ¡regalo sorpresa! para que nos lleves contigo en el resto de tu aventura.</p>
    <p>Reserva tu vuelo aqui arriba ahora mismo para que emprendamos un nuevo viaje juntos y nos permitas ser tu mejor acompañante.</p>
</div>
</main>

<?php require_once("./templates/footer.php") ?>

