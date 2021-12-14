
<?php
include 'util/header.php';
?>
<div class="principalContato">
    <h1 class="contato"> Tela de contato</h1>

    <div class="esquerda">
        <form>
            <label>Nome</label>
            <p><input type="text" placeholder=" digite seu nome completo"></p>
            <label>Email</label>
            <p><input type="email" placeholder=" email@dominio.com.br"></p>
            <label>Telefone</label>
            <p><input type="tel" placeholder=" (xx)9xxxx-xxxx"></p>
            <label>Cidade</label>
            <p> <select>
                <option>Escolha sua cidade</option>
                <option>Ceilandia</option>
                <option>Taguatinga</option>
                <option>Gama</option>
                <option>Samambaia</option>
                <option>Santa maria</option>
                <option>nucleo bandeirante</option>
                <option>Lago sul</option>
                <option>Lago norte</option>
                <option>Asa sul</option>
                <option>Asa norte</option>
                <option>Varjão</option>
                <option>Sobradinho</option>
            </select>
            </p> 
            <label>Mensagem</label>
            <p>
                <textarea  placeholder="Escreva aqui para dúvidas ou busca de fontes!" ></textarea> 
            </p>
            <input type="submit" value="Enviar">

        </form>

    </div>

    <div class="direita">
        <p align="center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.14561642199!2d-47.89234358501665!3d-15.796274027209732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae665464fb7%3A0x29d89d9adf83e13f!2sSenac%20Jess%C3%A9%20Freire%20(DF)!5e0!3m2!1spt-BR!2sbr!4v1639160616366!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </p>
    </div>
</div>


<?php
include 'util/footer.php';
?>