@extends('layouts.app')

@section('content')

<body>

    <section>
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-warning mb-2">Fale Conosco</p>
                    <h2 class="fw-bold">Queremos saber sua visão!</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post">
                            <div class="mb-3"><input class="form-control form-control form-control" type="text"
                                    id="name-1" name="name" placeholder="Nome"></div>
                            <div class="mb-3"><input class="form-control form-control form-control" type="email"
                                    id="email-1" name="email" placeholder="E-mail"></div>
                            <div class="mb-3"><textarea class="form-control form-control form-control" id="message-1"
                                    name="message" rows="6" placeholder="Mensagem"></textarea></div>
                            <div><button class="btn btn-warning shadow d-block w-100" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                    <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
                        <div class="d-flex align-items-center p-3">
                            <div
                                class="shadow d-flex flex-shrink-0 justify-content-center align-items-center bs-icon-md bs-icon-circle bs-icon-primary d-inline-block bs-icon bs-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-telephone text-dark">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                    </path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Telefone</h6>
                                <p class="text-muted mb-0">+55 (13) 98208-1352</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div
                                class="shadow d-flex flex-shrink-0 justify-content-center align-items-center bs-icon-md bs-icon-circle bs-icon-primary d-inline-block bs-icon bs-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-envelope text-dark">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                                    </path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">E-mail</h6>
                                <p class="text-muted mb-0">contato@writeaclass.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container faq-section">
            <section class="faq-section">
                <h2 class="fw-bold text-center py-3">Perguntas Frequentes</h2>
                <div class="container">
                    <div class="row" style="margin-bottom:5em;">
                        <div class="col-md-6 offset-md-3"
                            style="margin-bottom: 6em;padding: 20px;background-color: #090716;border-radius: 25px;">
                            <div id="faqlist" class="accordion accordion-flush">
                                <div class="accordion-item" style="background:rgba(9,7,23,255);">
                                    <h2 class="accordion-header"><button class="btn accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#content-accordion-1" style="background:rgba(9,7,23,255);">O
                                            que é o Write a class?</button></h2>
                                    <div id="content-accordion-1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <p class="accordion-body"> Write a class é uma plataforma de estudos que pode
                                            ser acessada tanto por alunos quanto para criadores de conteúdo.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header"><button class="btn accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#content-accordion-2"
                                            style="background:rgba(9,7,23,255);">Quanto custa o Write a class?</button>
                                    </h2>
                                    <div id="content-accordion-2" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <p class="accordion-body">Write a class é de graça para todos. Não existe a
                                            necessidade de pagamento ou assinaturas mensais.&nbsp;</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header"><button class="btn accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#content-accordion-3"
                                            style="background:rgba(9,7,23,255);">Não estou conseguindo me
                                            registrar.</button></h2>
                                    <div id="content-accordion-3" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <p class="accordion-body"> Para se registrar é muito fácil, apenas clique no
                                            botão registre-se. Qualquer dúvidas apenas nos mandar mensagem através do
                                            nosso Contato.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header"><button class="btn accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#content-accordion-4"
                                            style="background:rgba(9,7,23,255);">Como faço para ser um criador de
                                            conteúdo?</button></h2>
                                    <div id="content-accordion-4" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <p class="accordion-body"> Comece criando uma conta na plataforma. Depois, é só
                                            começar a postar e ganhar credibilidade dentro dela.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header"><button class="btn accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#content-accordion-5"
                                            style="background:rgba(9,7,23,255);">Como faço para ser aluno?</button></h2>
                                    <div id="content-accordion-5" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <p class="accordion-body">Comece se registrando na plataforma. é grátis. Escolha
                                            entre dezenas de cursos sempre atualizados para o seu estudo Comece agora!.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

</body>

</html>
@endsection