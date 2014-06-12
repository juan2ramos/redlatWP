<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>

<section class="banner-contact">
    <div class="head-contact">
        <span>...</span>

        <h2>Contacto</h2>
    </div>
</section>
<section id="contact">
    <form>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name">
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
        <span><input type="submit" value="...enviar"></span>
    </form>
</section>
<div class="contact-info">
    <div>
        Información General REDLAT<br>
        info@redlat.org<br>
    </div>
    <div>
        Información General CIRCULART<br>
        info@circulart.org<br>
    </div>
    <div>

        Secretaria Ejecutiva-Tesorera<br>
        Beatriz Elena García<br>
        bettygarcia@redlat.org<br>
    </div>
    <div>
        Producción General REDLAT<br>
        Julián Arbeláez<br>
        Julian.arbelaez@redlat.org<br>
    </div>
    <div>
        Producción General CIRCULART<br>
        Paula Posada<br>
        paulaposada@circulart.org<br>
    </div>
    <div>
        Coordinación Profesionales Ruedas de Negocios<br>
        Luis Fernando Zuluaga<br>
        luisfer@circulart.org<br>
    </div>
    <div>
        Coordinación Artistas Ruedas de Negocios<br>
        Milena García<br>
        milenagarcia@circulart.org<br>
    </div>
    <div>
        Editora web y redes sociales<br>
        Jenny Giraldo<br>
        jennygiraldo@redlat.org<br>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
