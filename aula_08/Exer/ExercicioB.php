<p>Monte um jogo da velhausando loops para desenhar o grid HTML</p>

<style>
    .container{
        display: inline-grid;
        grid-template-columns: auto auto auto;
    }

    .container > div{
        padding: 50px;
        background-color: rgb(181, 85, 85);
        border-collapse: collapse;
        border: 2px solid black;
    }
</style>

<div class="container">
    <?php
        for($div = 0; $div < 9; $div++){
            echo "<div></div>";
        }
    ?>  
</div>