<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
<input type="hidden" name="post_type" value="case-study">
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
                  <input class="form-check-input" type="checkbox" value="" id="checksAll" name="service[]">
                  <label class="form-check-label t_3">すべての課題を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service01" id="" name="service[]">
                  <label class="form-check-label t_3"> メディアウェイブ光</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="servise04" id="" name="service[]">
                  <label class="form-check-label t_3"> ease</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service05" id="" name="service[]">
                  <label class="form-check-label t_3"> knot</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service02" id="" name="service[]">
                  <label class="form-check-label t_3"> Vizu</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service03" id="" name="service[]">
                  <label class="form-check-label t_3"> クリーニングボード</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service06" id="" name="service[]">
                  <label class="form-check-label t_3"> Wi-Fi環境構築</label>
                </div>
              </div>
            </div>

            <!-- 課題一覧 -->
            <div id="taskList" class="list">
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="checksAll_2" name="task">
                  <label class="form-check-label t_3"> すべての課題を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task01" id="" name="task[]">
                  <label class="form-check-label t_3"> 地域の魅力を発信したい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task02" id="" name="task[]">
                  <label class="form-check-label t_3"> 館内付帯売上を上げたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task03" id="" name="task[]">
                  <label class="form-check-label t_3"> 館内Wi-Fiを快適な速度にしたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task04" id="" name="task[]">
                  <label class="form-check-label t_3"> 客室清掃の効率を上げたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task05" id="" name="task[]">
                  <label class="form-check-label t_3"> 3密回避システムを導入したい</label>
                </div>
              </div>
            </div>
            
            <!-- 部署一覧 -->
            <div id="departmentList" class="list">
              <p class="t_2">部署：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="checksAll_3" name="team">
                  <label class="form-check-label t_3"> すべての部署を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team03" id="" name="team[]">
                  <label class="form-check-label t_3"> 宴会</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team01" id="" name="team[]">
                  <label class="form-check-label t_3"> 宿泊</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team02" id="" name="team[]">
                  <label class="form-check-label t_3"> 料飲</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team04" id="" name="team[]">
                  <label class="form-check-label t_3"> 管理・営業</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team05" id="" name="team[]">
                  <label class="form-check-label t_3"> 調理</label>
                </div>
              </div>
            </div>

            <!-- 客室規模一覧 -->
            <div id="roomList" class="list">
              <p class="t_2">客室規模：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room01" id="" name="room[]">
                  <label class="form-check-label t_3"> 〜100室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room02" id="" name="room[]">
                  <label class="form-check-label t_3"> 〜300室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room03" id="" name="room[]">
                  <label class="form-check-label t_3"> 〜1000室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room04" id="" name="room[]">
                  <label class="form-check-label t_3"> 〜3000室</label>
                </div>
              </div>
            </div>
          </div>
          </ul>
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <!-- <input type="text" value="" name="s" id="s" /> -->
        <p class="cell tag-submit text-center t_2">
            <input type="hidden" id="s" name="s" value="<?php the_search_query(); ?>">  
            <input type="submit" id="searchsubmit" class="link-button" value="検索">
            <!-- <a class="t_2" href="search_page.html">検索</a> -->
        </p>   
    </div>
</form>