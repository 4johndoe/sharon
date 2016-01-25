<?php require_once 'confa.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container table-responsive">
      <h2>Грузовые автомобили</h2>
      <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
      <table class="table-striped table">
        <thead>
          <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Грузо-подъемность (тонн)</th>
            <th>Полезный объем (м³)</th>
            <th>Вмести-мость евро-паллета</th>
            <th>Пример</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Полуприцеп Тент</td>
            <td>Один из наиболее распространенных типов грузовых автомобилей. Предназначен для перевозки большинства видов грузов. Загрузка может производиться сверху, сбоку, сзади.</td>
            <td>20-25</td>
            <td>60-96</td>
            <td>22-33</td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_tent_150.jpg" width="100" height="80" alt="Тент, полуприцеп"></td>
          </tr>
          <tr>
            <td>Рефрижератор, полуприцеп</td>
            <td>Полуприцеп с холодильной установкой. Предназначен для перевозки скоропортящихся грузов, а также требующих определенного температурного режима. В грузовом отсеке он сохраняет температуру от +25° до - 25°С. Эксплуатация дороже обычных типов машин на 5-25%.</td>
            <td>20</td>
            <td>82</td>
            <td>32</td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_fridge_150.jpg" width="100" height="80" alt="Рефрижератор"></td>
          </tr>
          <tr>
            <td>Изотерм</td>
            <td>Предназначен для перевозки продуктов питания на небольшие расстояния. Способен сохранять температуру склада достаточное, для сохранения качества продукции, время.</td>
            <td>3-25</td>
            <td>32-92</td>
            <td>6-33</td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_izoterm_150.jpg" width="100" height="80" alt="изотерм"></td>
          </tr>
          <tr>
            <td>Автосцепка</td>
            <td>Автомобиль плюс прицеп. Преимущество: быстрая погрузка и разгрузка, а также большой полезный объем. Недостаток: не пригоден для перевозки длинномерных изделий.</td>
            <td>16-25</td>
            <td>60-120</td>
            <td>22-33</td>
            <td><img src="<?php echo IMG; ?>/trucks/avto-scepka_150.jpg" alt="Автосцепка" width="100" height="80"></td>
          </tr>
          <tr>
            <td>&quot;Jumbo&quot;</td>
            <td>Полуприцеп повышенной вместимости, которая достигается за счет &quot;Г&quot;-образного пола и уменьшенного диаметра колес полуприцепа.</td>
            <td>20</td>
            <td>96-110</td>
            <td>33</td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_jumbo_150.jpg" width="100" height="80" alt="Jumbo"></td>
          </tr>
          <tr>
            <td>Контейнеровоз</td>
            <td>Пригоден для перевозки контейнеров различных видов.</td>
            <td>20-30</td>
            <td></td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_conteiner_150.jpg" width="100" height="80" alt="контейнеровоз"></td>
          </tr>
          <tr>
            <td>Открытая бортовая</td>
            <td>Дает возможность перевозить разногабаритные грузы, которые выдерживают воздействия различных погодных условий.</td>
            <td>3-25</td>
            <td></td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_bortovoi_150.jpg" width="100" height="80" alt="открытая боковая"></td>
          </tr>
          <tr>
            <td>Открытая платформа</td>
            <td>Дает возможность перевозить разногабаритные грузы, которые выдерживают воздействия различных погодных условий.</td>
            <td>15-20</td>
            <td></td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_platforma_150.jpg" width="100" height="80" alt="открытая платформа"></td>
          </tr>
          <tr>
            <td>Автоцистерна</td>
            <td>Предназначена для перевозки жидкостей.</td>
            <td>12-22</td>
            <td>8-40</td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_tank_150.jpg" width="100" height="80" alt="автоцистерна"></td>
          </tr>
          <tr>
            <td>Микроавтобус</td>
            <td>Предназначен для перевозки грузов малого объема и веса.</td>
            <td>1-3</td>
            <td>3-10</td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/minibus.jpg" width="100" height="80" alt="микроавтобус"></td>
          </tr>
          <tr>
            <td>Автовоз</td>
            <td>Предназначен для перевозки легковых автомобилей. Вместимость напрямую зависит от длины прицепа (в среднем 8-10 автомобилей).</td>
            <td>20-25</td>
            <td></td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_avtovoz_150.jpg" width="100" height="80" alt="автовоз"></td>
          </tr>
          <tr>
            <td>Зерновоз</td>
            <td>Применяется для перевозки зерновых культур.</td>
            <td>12-22</td>
            <td></td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_zernovoz_150.jpg" width="100" height="80" alt="зерновоз"></td>
          </tr>
          <tr>
            <td>Самосвал</td>
            <td>Применяется для перевозки песка и других сыпучих грузов.</td>
            <td>12-22</td>
            <td></td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_samosval_150.jpg" width="100" height="80" alt="самосвал"></td>
          </tr>
          <tr>
            <td>Лесовоз</td>
            <td>Дает возможность перевозки длинномерной лесо-трубной продукции.</td>
            <td>10-30</td>
            <td></td>
            <td></td>
            <td><img src="<?php echo IMG; ?>/trucks/polupricep_sortiment_150.jpg" width="100" height="80" alt="лесовоз"></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container table-responsive">
      <h2>Меры длины</h2>
      <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
      <table class="table-striped table">
        <!-- <thead>
          <tr>
            <th>Регион</th>
            <th>Код</th>
            <th>№</th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <td>1 километр (км.)</td>
            <td>1 000 метров (м)</td>
            <td></td>
          </tr>
          <tr>
            <td>1 метр (м)</td>
            <td>10 дециметров (дм)</td>
            <td>100 сантиметров (см)</td>
          </tr>
          <tr>
            <td>1 дециметр (дм)</td>
            <td>10 сантиметров (см)</td>
            <td>100 миллиметров (мм)</td>
          </tr>
          <tr>
            <td>1 сантиметр (см)</td>
            <td>10 миллиметров(мм)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container table-responsive">
      <h2>Меры площади</h2>
      <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
      <table class="table-striped table">
        <!-- <thead>
          <tr>
            <th>Регион</th>
            <th>Код</th>
            <th>№</th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <td>1 кв. километр</td>
            <td>1 000 000 кв. метров</td>
            <td></td>
          </tr>
          <tr>
            <td>1 кв. метр</td>
            <td>100 кв. дециметров</td>
            <td>10 000 кв. сантиметров</td>
          </tr>
          <tr>
            <td>1 гектар (га)</td>
            <td>100 акр. (а)</td>
            <td>10 000 кв. метров</td>
          </tr>
          <tr>
            <td>1 ар (а)</td>
            <td>100 кв. метров</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container table-responsive">
      <h2>Меры объёма</h2>
      <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
      <table class="table-striped table">
        <!-- <thead>
          <tr>
            <th>Регион</th>
            <th>Код</th>
            <th>№</th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <td>1 куб. метр</td>
            <td>1 000 куб. дециметров</td>
            <td>1 000 000 куб. сантиметров</td>
          </tr>
          <tr>
            <td>1 куб. дециметр</td>
            <td>1 000 куб. сантиметров</td>
            <td></td>
          </tr>
          <tr>
            <td>1 литр.</td>
            <td>1 куб. дециметр</td>
            <td></td>
          </tr>
          <tr>
            <td>1 геколитр</td>
            <td>100 литров</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container table-responsive">
      <h2>Меры массы</h2>
      <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
      <table class="table-striped table">
        <!-- <thead>
          <tr>
            <th>Регион</th>
            <th>Код</th>
            <th>№</th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <td>1 тонна (т)</td>
            <td>1 000 килограммов (кг)</td>
            <td></td>
          </tr>
          <tr>
            <td>1 центнер (ц)</td>
            <td>100 килограммов (кг)</td>
            <td></td>
          </tr>
          <tr>
            <td>1 килограмм (кг)</td>
            <td>1 000 граммов (г)</td>
            <td></td>
          </tr>
          <tr>
            <td>1 грамм (г)</td>
            <td>1 000 миллиграммов (мг)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container table-responsive">
      <h2>Автомобильные коды</h2>
      <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
      <table class="table-striped table">
        <thead>
          <tr>
            <th>Регион</th>
            <th>Код</th>
            <th>№</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Республика Крым</td>
            <td>АК</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Винницкая область</td>
            <td>АВ</td>
            <td>02</td>
          </tr>
          <tr>
            <td>Волынская область</td>
            <td>АС</td>
            <td>03</td>
          </tr>
          <tr>
            <td>Днепропетровская обл.</td>
            <td>АЕ</td>
            <td>04</td>
          </tr>
          <tr>
            <td>Донецкая область</td>
            <td>АН</td>
            <td>05</td>
          </tr>
          <tr>
            <td>Житомирская область</td>
            <td>АМ</td>
            <td>06</td>
          </tr>
          <tr>
            <td>Закарпатская область</td>
            <td>АО</td>
            <td>07</td>
          </tr>
          <tr>
            <td>Запорожская область</td>
            <td>АР</td>
            <td>08</td>
          </tr>
          <tr>
            <td>Ивано-Франковская обл.</td>
            <td>АТ</td>
            <td>09</td>
          </tr>
          <tr>
            <td>Киевская область</td>
            <td>AI</td>
            <td>10</td>
          </tr>
          <tr>
            <td>г. Киев</td>
            <td>АА</td>
            <td>11</td>
          </tr>
          <tr>
            <td>Кировоградская область</td>
            <td>ВА</td>
            <td>12</td>
          </tr>
          <tr>
            <td>Луганская область</td>
            <td>ВВ</td>
            <td>13</td>
          </tr>
          <tr>
            <td>Львовская область</td>
            <td>ВС</td>
            <td>14</td>
          </tr>
          <tr>
            <td>Николаевская область</td>
            <td>ВЕ</td>
            <td>15</td>
          </tr>
          <tr>
            <td>Одесская область</td>
            <td>ВН</td>
            <td>16</td>
          </tr>
          <tr>
            <td>Полтавская область</td>
            <td>BI</td>
            <td>17</td>
          </tr>
          <tr>
            <td>Ровенская область</td>
            <td>ВК</td>
            <td>18</td>
          </tr>
          <tr>
            <td>Сумская область</td>
            <td>ВМ</td>
            <td>19</td>
          </tr>
          <tr>
            <td>Тернопольская область</td>
            <td>ВО</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Харьковская область</td>
            <td>АХ</td>
            <td>21</td>
          </tr>
          <tr>
            <td>Херсонская область</td>
            <td>ВТ</td>
            <td>22</td>
          </tr>
          <tr>
            <td>Хмельницкая область</td>
            <td>ВХ</td>
            <td>23</td>
          </tr>
          <tr>
            <td>Черкасская область</td>
            <td>СА</td>
            <td>24</td>
          </tr>
          <tr>
            <td>Черниговская область</td>
            <td>СВ</td>
            <td>25</td>
          </tr>
          <tr>
            <td>Черновицкая область</td>
            <td>СЕ</td>
            <td>26</td>
          </tr>
          <tr>
            <td>г. Севастополь</td>
            <td>СН</td>
            <td>27</td>
          </tr>
        </tbody>
      </table>
    </div>



    <div>
      <table width="381" align="center" cellpadding="1" cellspacing="1">
      <tbody>
     
        </tr>
        
      </tbody>
    </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
<!-- 2 section from index.php -->
<section class="has-padding" id="news">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="section-heading light-section-heading">Последние новости<span>Прямо с нашего блога</span></h2>
      </div>
      <!--/.text-center-->
    </div>
    <!--/.row-->
    <div class="row">
      <div class="mt-blog-posts text-center">
        <div class="row">
          <div class="mt-blogpost-wrapper col-xs-12">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail">
                <div class="entry-featured-image">
                  <a href="http://www.sharon.com.ua/wp/2015/11/26/hello-world/">
                    <img src="http://www.sharon.com.ua/wp/wp-content/themes/pixova-lite/layout/images/blog-defaults/rand-6.jpg" width="250" height="250" >
                  </a>
                </div>
                <div class="caption">
                  <div class="mt-date">Ноябрь 26, 2015</div>
                  <a class="mt-blogpost-title" href="http://www.sharon.com.ua/wp/2015/11/26/hello-world/">Hello world!</a>
                  <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
                  <p></p>
                </div>
                <!--/.caption-->
              </div>
              <!--/.thumbnail-->
            </div> 
            <!--/.col-sm-6.col-md-4-->
          </div> 
          <!--/.mt-blogpost-wrapper-->
        </div>
        <!--/.row-->
      </div>
      <!--/.mt-blog-posts-->
    </div>
    <!--/.row-->
  </div>
  <!--/.container-->
</section>
<section class="has-padding" id="team">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="section-heading light-section-heading">Команда<span>Познакомьтесь с людьми, которые воплотили это в жизнь.</span></h2>
      </div>
      <!--/.text-center-->
    </div>
    <!--/.row-->
    <div class="row align-center">
      <div class="mt-team">
        <img class="mt-team-img" src="http://www.sharon.com.ua/wp/wp-content/themes/pixova-lite/layout/images/team/teammembru-150x150.jpg">
        <div class="mt-team-member-name">Джон Доу</div>
        <!--/.mt-team-member-name-->
        <div class="mt-team-description">
          <div class="mt-team-member-icons">
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="https://www.facebook.com/machothemes/">
                <i class="fa fa-facebook-official"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="http://www.dribbble.com/">
                <i class="fa fa-dribbble"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
          </div>
          <!--/.mt-team-member-icons-->
        </div>
        <!--/.mt-team-description-->
      </div> 
      <!--/.mt-team-->
      <div class="mt-team">
        <img class="mt-team-img" src="http://www.sharon.com.ua/wp/wp-content/themes/pixova-lite/layout/images/team/teammembru2-150x150.jpg">
        <div class="mt-team-member-name">Джон Доу</div>
        <!--/.mt-team-member-name-->
        <div class="mt-team-description">
          <div class="mt-team-member-icons">
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="https://www.facebook.com/machothemes/">
                <i class="fa fa-facebook-official"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="http://www.dribbble.com/">
                <i class="fa fa-dribbble"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
          </div>
          <!--/.mt-team-member-icons-->
        </div>
        <!--/.mt-team-description-->
      </div> 
      <!--/.mt-team-->
      <div class="mt-team">
        <img class="mt-team-img" src="http://www.sharon.com.ua/wp/wp-content/themes/pixova-lite/layout/images/team/teammembru-150x150.jpg">
        <div class="mt-team-member-name">Джон Доу</div>
        <!--/.mt-team-member-name-->
        <div class="mt-team-description">
          <div class="mt-team-member-icons">
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="https://www.facebook.com/machothemes/">
                <i class="fa fa-facebook-official"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
            <div class="mt-team-member-icon"><a rel="nofollow" href="http://www.dribbble.com/">
              <i class="fa fa-dribbble"></i>
            </a>
            </div>
            <!--/.mt-team-member-icon-->
          </div>
          <!--/.mt-team-member-icons-->
        </div>
        <!--/.mt-team-description-->
      </div> 
      <!--/.mt-team-->
      <div class="mt-team">
        <img class="mt-team-img" src="http://www.sharon.com.ua/wp/wp-content/themes/pixova-lite/layout/images/team/teammembru2-150x150.jpg">
        <div class="mt-team-member-name">Джон Доу</div>
        <!--/.mt-team-member-name-->
        <div class="mt-team-description">
          <div class="mt-team-member-icons">
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="https://www.facebook.com/machothemes/">
                <i class="fa fa-facebook-official"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="http://www.dribbble.com/">
                <i class="fa fa-dribbble"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
          </div>
          <!--/.mt-team-member-icons-->
        </div>
        <!--/.mt-team-description-->
      </div> 
      <!--/.mt-team-->
      <div class="mt-team">
        <img class="mt-team-img" src="http://www.sharon.com.ua/wp/wp-content/themes/pixova-lite/layout/images/team/teammembru-150x150.jpg">
        <div class="mt-team-member-name">Джон Доу</div>
        <!--/.mt-team-member-name-->
        <div class="mt-team-description">
          <div class="mt-team-member-icons">
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="https://www.facebook.com/machothemes/">
                <i class="fa fa-facebook-official"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
            <div class="mt-team-member-icon">
              <a rel="nofollow" href="http://www.dribbble.com/">
                <i class="fa fa-dribbble"></i>
              </a>
            </div>
            <!--/.mt-team-member-icon-->
          </div>
          <!--/.mt-team-member-icons-->
        </div>
        <!--/.mt-team-description-->
      </div> 
      <!--/.mt-team-->
    </div>
    <!--/.row-->
  </div>
  <!--/.container-->
</section>
<!--/ SECTION -->

<!-- last two section of footer -->
      <div class="mt-footer-widget col-md-3">
        <div class="widget pixova_lite_widget_social_media">
          <h2 class="widgettitle">Подписаться</h2>
          <div class="fixed">
            <ul>
              <li><a class="facebook-icon social-icon" href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
              <li><a class="twitter-icon social-icon" href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
              <li><a class="googleplus-icon social-icon" href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
              <li><a class="pinterest-icon social-icon" href="#"><i class="fa fa-pinterest"></i>Pinterest</a></li>
              <li><a class="youtube-icon social-icon" href="#"><i class="fa fa-youtube"></i>YouTube</a></li>
              <li><a class="dribble-icon social-icon" href="#"><i class="fa fa-dribbble"></i>Dribbble</a></li>
              <li><a class="tumblr-icon social-icon" href="#"><i class="fa fa-tumblr"></i>Tumblr</a></li>
              <li><a class="instagram-icon social-icon" href="#."><i class="fa fa-instagram"></i>Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.mt--foter--widget.col-md-3-->
      <div class="mt-footer-widget col-md-3">
        <div class="widget pixova_lite_widget_latest_posts">
          <h2 class="widgettitle">Свежие посты</h2>
          <ul>
            <li class="fixed first">
              <h5><a href="http://www.sharon.com.ua/wp/2015/11/26/hello-world/">Hello world!</a></h5>
              <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
              <p></p>
            </li>
          </ul>
        </div>
      </div>
      <!--/.mt--foter--widget.col-md-3-->  