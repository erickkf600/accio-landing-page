<section class="contato-form">
    <div class="container form">
        <div class="row">
            <div class="info col-md-5 col-12">
                <h2 class="text-light">CONTATO</h2>
                <hr>
                <div class="textos-left">
                    <div class="icones"><i class="far fa-comments"></i></div>
                    <div>
                        <p>Duvidas, Sugestoões, Reclamações, Elogios? Fale conosco</p>
                    </div>
                </div>
                <div class="textos-left">
                    <div class="icones"><i class="far fa-question-circle"></i></div>
                    <div>
                        <p>Estamos prontos para esclarecer quaisquer duvidas.</p>
                    </div>
                </div>
                <div class="textos-left">
                    <div class="icones"><i class="far fa-clock"></i></div>
                    <div>
                        <p>Atendimento: 09:00 às 19:00 de segunda à sexta-feira (exceto feriados)</p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-xl-6 offset-lg-1">
                <form method="post" action="mensagem.php">
                    <div class="service-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <input type="text" placeholder="Nome" class="form-control" required>
                                    <div class="form-icon"><i class="fas fa-user"></i></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <input type="email" placeholder="Email" class="form-control" required>
                                    <div class="form-icon"><i class="fa fa-envelope"></i></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <input type="text" placeholder="Telefone" class="form-control" required 
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                    <div class="form-icon"><i class="fa fa-phone"></i></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="select">
                                        <select name="select" class="form-control">
                                            <option selected disabled>Motivo do Contato</option>
                                            <option value="Sugestão">Sugestão</option>
                                            <option value="Reclamação">Reclamação</option>
                                            <option value="Duvida">Duvida</option>
                                            <option value="Elogio">Elogio</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-block" id="enviar">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>