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
                  <input class="form-check-input" type="checkbox" id="checksAll">
                  <label class="form-check-label t_3">すべてのサービスを選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service01" id="" name="service[]">
                  <label class="form-check-label t_3"> メディアウェイブ光</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="servise04" id="" name="service[]">
                  <label class="form-check-label t_3"> easeクラウド</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service05" id="" name="service[]">
                  <label class="form-check-label t_3"> knotポータル</label>
                </div>
                <!-- <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service02" id="" name="service[]">
                  <label class="form-check-label t_3"> Vizu</label>
                </div> -->
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service03" id="" name="service[]">
                  <label class="form-check-label t_3"> クリーニングボード</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks" type="checkbox" value="service06" id="" name="service[]">
                  <label class="form-check-label t_3"> Wi-Fi/ネットワーク環境構築</label>
                </div>
              </div>
            </div>

            <!-- 課題一覧 -->
            <div id="taskList" class="list">
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="checksAll_2">
                  <label class="form-check-label t_3"> すべての課題を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task01" id="" name="task[]">
                  <label class="form-check-label t_3"> 情報共有/業務効率化</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task02" id="" name="task[]">
                  <label class="form-check-label t_3"> 作業負担/作業量の削減</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task03" id="" name="task[]">
                  <label class="form-check-label t_3"> 館内インフラ設備の最適化</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task04" id="" name="task[]">
                  <label class="form-check-label t_3"> 館内施設の利用率/売上向上</label>
                </div>
                <!-- <div class="form-check">
                  <input class="form-check-input checks_2" type="checkbox" value="task05" id="" name="task[]">
                  <label class="form-check-label t_3"> 3密回避システムを導入したい</label>
                </div> -->
              </div>
            </div>
            
            <!-- 部署一覧 -->
            <div id="departmentList" class="list">
              <p class="t_2">部署：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="checksAll_3">
                  <label class="form-check-label t_3"> すべての部署を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team03" id="" name="team[]">
                  <label class="form-check-label t_3"> 宿泊</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team01" id="" name="team[]">
                  <label class="form-check-label t_3"> 設備</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team02" id="" name="team[]">
                  <label class="form-check-label t_3"> 飲料</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team04" id="" name="team[]">
                  <label class="form-check-label t_3"> マーケティング</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team05" id="" name="team[]">
                  <label class="form-check-label t_3"> 管理</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team06" id="" name="team[]">
                  <label class="form-check-label t_3"> 清掃</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input checks_3" type="checkbox" value="team07" id="" name="team[]">
                  <label class="form-check-label t_3"> その他</label>
                </div>
              </div>
            </div>

            <!-- 客室規模一覧 -->
            <div id="roomList" class="list">
              <p class="t_2">客室規模：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room01" id="" name="room[]">
                  <label class="form-check-label t_3"> 100室未満</label>
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
                  <label class="form-check-label t_3"> 1000室以上</label>
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