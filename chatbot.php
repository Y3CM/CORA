<?php
require_once 'functions/functions.php';
verificar_session('"index.php"');
render_template('templates','head');
render_template('templates','header');
render_template('templates','style_chat');
render_componentes( 'componentes','chat');
render_template('templates','footer');
?>
<script src="JS/chatbot.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
