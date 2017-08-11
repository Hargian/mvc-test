<script type="text/javascript" src="/design/js/for-new-task.js"></script>
<div class="container">
    <div class="row" >
<div class="post-title margin-top-70">
    <h1>Новая задача</h1>
</div>
<div class="row margin-top-30">
    <div class="col-md-12">

        <div class="row">
            <form action="new" method="post" enctype="multipart/form-data">
                <div id="newTaskForm" style="display: ">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Введите логин" onblur="getTableValue(this)">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Введите E-mail" onblur="getTableValue(this)">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" id="title" name="title" class="form-control" placeholder="Введите зголовок" onblur="getTableValue(this)">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="file" id="files" name="image" class="form-control" multiple>
                    </div>
                    <p id="file-warning" style="display: none"><b style="color: red">Неверный тип файла!</b></p>
<script type="text/javascript">
    document.getElementById('files').addEventListener('change', showFile, false);
</script>
                </div>
                <div class="col-sm-12">
                    <div class="textarea-message form-group">
                        <textarea id="description" name="description" class="textarea-message form-control" placeholder="Your Message" rows="5" onblur="getTableValue(this)"></textarea>
                    </div>
                </div>


                <div class="text-center">
                        <button type="submit" class="load-more-button" style="display: inline;" onclick="return showPreviwew()">Просмотр</button>
                        &nbsp;
                        <button type="submit" class="load-more-button" style="display: inline;" onclick="return checkFiles()">Готово</button>
                </div>
                <br>
                </div>
                <div id="showPreviewTable" style="display: none;">
                    <div class="row portfolio" >
                        <div class="col-sm-6 custom-pad-1" id="imageFile">
                        </div>
                        <div class="col-sm-6 custom-pad-2">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>

                                    <tr>
                                        <td><b>Статус</b></td>
                                        <td>В работе</td>
                                    </tr>
                                    <tr>
                                        <td><b>Пользователь</b></td>
                                        <td id="table-username">123</td>
                                    </tr>

                                    <tr>
                                        <td><b>E-mail</b></td>
                                        <td id="table-email">123</td>
                                    </tr>

                                    <tr>
                                        <td><b>Название задачи</b></td>
                                        <td id="table-title">123</td>
                                    </tr>

                                    <tr>
                                        <td><b>Описание задачи</b></td>
                                        <td id="table-description">123</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="load-more-button" style="display: inline;" onclick="return showForm()">Назад</button>
                        &nbsp;
                        <button type="submit" class="load-more-button" style="display: inline;" onclick="return checkFiles()">Готово</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




</div>
</div>