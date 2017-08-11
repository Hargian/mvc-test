<div class="container">
    <div class="row" >
        <div class="col-md-9">
            <div class="col-md-12 page-body">
                <div class="row" >


                    <div class="sub-title">
                        <h2>Задачи</h2>
                        <?=$variables['taskCreate']==1?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2 style="color:green;">Задача создана!</h2>':'' ?>
                        <?= $_SESSION['admin']?
                            '<a href="logout"><h3 style="float:right;">Logout</h3></a>'
                            :
                            '<a href="login"><h3 style="float:right;">Login</h3></a>'?>
                    </div>


                    <div class="col-md-12 content-page">
                        <div class="col-md-12 blog-post">

                            <!-- Intro Start -->
                            <div class="post-title margin-bottom-30">
                                <h1>Список <span class="main-color">задач</span></h1>
                            </div>
                            <div class="text-center">
                                <form action="task/new" method="post">
                                <button type="submit" class="load-more-button">Новая</button>
                                </form>
                            </div>
                            <br>
                            <div>
                                <div>
                                    <form action="/" method="get" >
                                        <label>Сортирвка статуса</label>
                                        <select name="order_status" style="display: inline;">
                                            <option></option>
                                            <?php if($_GET['order_status']=='ASC'){?>
                                                <option selected value="ASC">В работе</option>
                                                <option value="DESC">Выполнено</option>
                                            <?php }elseif($_GET['order_status']=='DESC'){?>
                                                <option value="ASC">В работе</option>
                                                <option selected value="DESC">Выполнено</option>
                                            <?php }else{?>
                                                <option value="ASC">В работе</option>
                                                <option value="DESC">Выполнено</option>
                                            <?php }?>
                                        </select>
                                        <label>Сортирвка Пользователя</label>
                                        <select name="order_username" style="display: inline;">
                                            <option></option>
                                            <?php if($_GET['order_username']=='ASC'){?>
                                                <option selected value="ASC">От "А"</option>
                                                <option value="DESC">От "Я"</option>
                                            <?php }elseif($_GET['order_username']=='DESC'){?>
                                                <option value="ASC">От "А"</option>
                                                <option selected value="DESC">От "Я"</option>
                                            <?php }else{?>
                                                <option value="ASC">От "А"</option>
                                                <option value="DESC">От "Я"</option>
                                            <?php }?>
                                        </select>
                                        <label>Сортирвка E-mail</label>
                                        <select name="order_email" style="display: inline;">
                                            <option></option>
                                            <?php if($_GET['order_email']=='ASC'){?>
                                                <option selected value="ASC">От "А"</option>
                                                <option value="DESC">От "Z"</option>
                                            <?php }elseif($_GET['order_email']=='DESC'){?>
                                                <option value="ASC">От "А"</option>
                                                <option selected value="DESC">От "Z"</option>
                                            <?php }else{?>
                                                <option value="ASC">От "А"</option>
                                                <option value="DESC">От "Z"</option>
                                            <?php }?>
                                        </select>
                                        <button type="submit" style="display: inline;" onclick="return checkSorts(this)">
                                            <span class="main-color">Сортировать</span>
                                        </button>
                                    </form>
                                </div>
                                <br>
                                <!--sendOrderForm(this)-->
                                <?php foreach ($variables['tasks'] as $k=> $task){?>
                                <div class="row">
                                    <div class="col-sm-6 custom-pad-1">
                                        <img src="<?=$task['image']?>" class="img-responsive" style="height:320px;width:240px;" alt="">
                                    </div>


                                    <div class="col-sm-6 custom-pad-2">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>

                                                <tr>
                                                    <td><b>Статус</b></td>
                                                    <td <?=$_SESSION['admin']?'onclick="activateForm(this)"':''?>>
                                                        <p class="table-values" style="display: block"><?=$task['status']==1?'В работе':'Выполнено' ?></p>
                                                        <div class="table-inputs" style="display: none">
                                                            <form action="" method="GET" >
                                                                <select name="status" onchange="sendForm(this)">
                                                                    <option value="1">В работе</option>
                                                                    <option value="2">Выполнено</option>
                                                                </select>
                                                                <input type="hidden" name="id" value="<?=$task['id']?>">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Пользователь</b></td>
                                                    <td <?=$_SESSION['admin']?'onclick="activateForm(this)"':''?>>
                                                        <p class="table-values" style="display: block"><?=$task['username'] ?></p>
                                                        <div class="table-inputs" style="display: none">
                                                            <form action="" method="GET" >
                                                                <input type="text" name="username" value="<?=$task['username']?>" onblur="sendForm(this)">
                                                                <input type="hidden" name="id" value="<?=$task['id']?>">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>E-mail</b></td>
                                                    <td <?=$_SESSION['admin']?'onclick="activateForm(this)"':''?>>
                                                        <p class="table-values" style="display: block"><?=$task['email'] ?></p>
                                                        <div class="table-inputs" style="display: none">
                                                            <form action="" method="GET" >
                                                                <input type="text" name="email" value="<?=$task['email']?>" onblur="sendForm(this)">
                                                                <input type="hidden" name="id" value="<?=$task['id']?>">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>Название задачи</b></td>
                                                    <td <?=$_SESSION['admin']?'onclick="activateForm(this)"':''?>>
                                                        <p class="table-values" style="display: block"><?=$task['title'] ?></p>
                                                        <div class="table-inputs" style="display: none">
                                                            <form action="" method="GET" >
                                                                <input type="text" name="title" value="<?=$task['title']?>" onblur="sendForm(this)">
                                                                <input type="hidden" name="id" value="<?=$task['id']?>">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>Описание задачи</b></td>
                                                    <td <?=$_SESSION['admin']?'onclick="activateForm(this)"':''?>>
                                                        <p class="table-values" style="display: block"><?=$task['description'] ?></p>
                                                        <div class="table-inputs" style="display: none">
                                                            <form action="" method="GET" >
                                                                <textarea name="description" onblur="sendForm(this)"><?=$task['description']?>"</textarea>
                                                                <input type="hidden" name="id" value="<?=$task['id']?>">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                    <br>
                                <?php } ?>
                            </div>
                            <?php if($variables['page']!=1){?>
                            <form action="" method="get" style=" display: inline;">
                                <input type="hidden" name="page" value="<?=($variables['page']-1)?>">
                                <button type="submit" onclick="return nextPage(this)">
                                     <span class="main-color">Назад</span>
                                </button>
                            </form>
                            <?php } ?>
                            <form action="" method="get" style=" display: inline;">
                               <label> Текущая страница:&nbsp</label>
                                <input type="text" name="page" value="<?=($variables['page'])?>">&nbsp
                                <button type="submit" onclick="return nextPage(this)">
                                    <span class="main-color"> На страницу</span>
                                </button>
                            </form>
                            <form action="" method="get" style=" display: inline;">
                                <input type="hidden" name="page" value="<?=($variables['page']+1)?>">
                                <button type="submit" onclick="return nextPage(this)">
                                    <span class="main-color"> вперед</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 page-body margin-top-50 footer">
                <footer>
                    <div class="uipasta-credit">Design By <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
                </footer>
            </div>

        </div>

    </div>
</div>
<script type="text/javascript" src="/design/js/updateTask.js"></script>