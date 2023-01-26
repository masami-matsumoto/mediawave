<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
<ul>
          <p class="t_2 title btn text-center">導入事例を検索する</p>
          <div class="box">
            <div class="grid-x">
              <div class="form-check cell small-12 large-6">
                <input class="form-check-input" type="radio" name="maker" value="service" onclick="formSwitch()" checked>
                <label class="form-check-label t_2"> サービス名から絞り込む</label>
              </div>
              <div class="form-check cell small-12 large-6">
                <input class="form-check-input" type="radio" name="maker" value="task" onclick="formSwitch()">
                <label class="form-check-label t_2"> 課題から絞り込む</label>
              </div>
            </div>

            <!-- サービス一覧 -->
            <div id="serviceList" class="list">
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="all_services" name="service">
                  <label class="form-check-label t_3 svc00"> すべてのサービスを選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3 svc01"> メディアウェイブ光</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3 svc02"> ease</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3 svc03"> knot</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3 svc04"> Vizu</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3 svc05"> クリーニングボード</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3 svc06"> Wi-Fi環境構築</label>
                </div>
              </div>
            </div>

            <!-- 課題一覧 -->
            <div id="taskList" class="list">
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="all_tasks" name="task">
                  <label class="form-check-label t_3 task00"> すべての課題を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3 task01"> 地域の魅力を発信したい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3 task02"> 館内付帯売上を上げたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3 task03"> 館内Wi-Fiを快適な速度にしたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3 task04"> 客室清掃の効率を上げたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3 task05"> 3密回避システムを導入したい</label>
                </div>
              </div>
            </div>
            
            <!-- 部署一覧 -->
            <div id="departmentList" class="list">
              <p class="t_2">部署：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="place" id="all_departments" name="department">
                  <label class="form-check-label t_3 team00"> すべての部署を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3 team01"> 宴会</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3 team02"> 宿泊</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3 team03"> 料飲</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3 team04"> 管理・営業</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3 team05"> 調理</label>
                </div>
              </div>
            </div>

            <!-- 客室規模一覧 -->
            <div id="roomList" class="list">
              <p class="t_2">客室規模：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room">
                  <label class="form-check-label t_3 room01"> 〜100室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room">
                  <label class="form-check-label t_3 room02"> 〜300室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room">
                  <label class="form-check-label t_3 room03"> 〜1000室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room">
                  <label class="form-check-label t_3 room04"> 〜3000室</label>
                </div>
              </div>
            </div>
          </div>
          </ul>
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <!-- <input type="text" value="" name="s" id="s" /> -->
        <p class="cell tag-submit text-center t_2">
            <input type="submit" id="searchsubmit" class="link-button" value="検索">
            <!-- <a class="t_2" href="search_page.html">検索</a> -->
        </p>   
    </div>
</form>