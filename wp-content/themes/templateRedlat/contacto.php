<?php
/*
Template Name: contacto
*/
?>
<?php

get_header();
?>

<section class="banner-contact">
    <div class="head-contact">
        <span>...</span>

        <h2>Contacto</h2>
    </div>
</section>
<section id="contact">

        <form action="http://redlat.org/contacto" method="post" id="#contact-form">
            <div>
                <label for="name-user">Nombre:</label>
                <input type="text" name="name-user">
            </div>
            <div>
                <label for="institution">Institución:</label>
                <input type="text" name="institution">
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="phone">Teléfono:</label>
                <input type="tel" name="phone">
            </div>
            <div>
                <label for="city">Ciudad:</label>
                <input type="text" name="city">
            </div>
            <label for="message">Mensaje:</label>
            <textarea name="message"></textarea>

            <div class="input-contend">
                <label for="dirigido">Dirigido a : </label>
                <select name="dirigido" id="">
                    <option value="info@redlat.org">Información General REDLAT</option>
                    <option value="info@circulart.org">Información General CIRCULART</option>
                    <option value="bettygarcia@redlat.org">Secretaria Ejecutiva-Tesorera</option>
                    <option value="julian.arbelaez@redlat.org"> Producción General REDLAT</option>
                    <option value="paulaposada@circulart.org">Producción General CIRCULART</option>
                    <option value="luisfer@circulart.org">Coordinación Profesionales Ruedas de Negocios</option>
                    <option value="milenagarcia@circulart.org">Coordinación Artistas Ruedas de Negocios</option>
                    <option value="juanramos@redlat.org">Editora web y redes sociales</option>
                </select>
            </div>
            <span><input type="submit" value="...enviar"></span>
        </form>
        <div class="contact-info">
            <h3>O puedes escribirle a...</h3>

            <div>
                Información General REDLAT<br>
                <a href="mailto:info@redlat.org">info@redlat.org</a><br>
            </div>
            <div>
                Información General CIRCULART<br>
                <a href="mailto:info@circulart.org">info@circulart.org</a><br>
            </div>
            <div>

                Secretaria Ejecutiva-Tesorera<br>
                Beatriz Elena García<br>
                <a href="mailto:bettygarcia@redlat.org">bettygarcia@redlat.org</a><br>
            </div>
            <div>
                Producción General REDLAT<br>
                Julián Arbeláez<br>
                <a href="mailto:julian.arbelaez@redlat.org">julian.arbelaez@redlat.org</a><br>
            </div>
            <div>
                Producción General CIRCULART<br>
                Paula Posada<br>
                <a href="mailto:paulaposada@circulart.org">paulaposada@circulart.org</a><br>
            </div>
            <div>
                Coordinación Profesionales Ruedas de Negocios<br>
                Luis Fernando Zuluaga<br>
                <a href="mailto:luisfer@circulart.org">luisfer@circulart.org</a><br>
            </div>
            <div>
                Coordinación Artistas Ruedas de Negocios<br>
                Milena García<br>
                <a href="mailto:milenagarcia@circulart.org">milenagarcia@circulart.org</a><br>
            </div>
            <div>
                Editora web y redes sociales<br>
                Jenny Giraldo<br>
                <a href="mailto:jennygiraldo@redlat.org">jennygiraldo@redlat.org</a><br>
            </div>
        </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
