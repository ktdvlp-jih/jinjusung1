<script type="text/javascript" src="../../dist/js/survey_form.js"></script>





<div class="survey_form">
    <div class="survey_form_header">
        <ul>
            <li class="content_bar">페이지 담당</li>
            <li class="content_bar">관광진흥과 축제담당 (055-880-2051)</li>
            <li>최종수정일 2019-09-23</li>
        </ul>
    </div>

    <div class="survey_form_bottom">
        <div class="survey_form_bottom_logo">Logo</div>
        <form action="../components/layout/survey_value.php" name="survey_form" id="survey_form" method="POST">
            <div class="top">
                <p>이 페이지에서 제공하는 정보에 만족하십니까? 평가 :</p>
                <div>
                    <label>
                        <input type="radio" name="survey_radio" id="s_v5" value=5> 매우 만족
                    </label>
                    <label>
                        <input type="radio" name="survey_radio" id="s_v4" value=4> 만족
                    </label>
                    <label>
                        <input type="radio" name="survey_radio" id="s_v3" value=3> 보통
                    </label>

                    <label>
                        <input type="radio" name="survey_radio" id="s_v2" value=2> 불만족
                    </label>
                    <label>
                        <input type="radio" name="survey_radio" id="s_v1" value=1> 매우 불만족
                    </label>
                </div>

            </div>
            <div class="bottom">
                <input type="text" name="s_vt" id="s_vt" value="" placeholder="정보 제공에 감사합니다."><button type="button" onclick="survey_submit()">등록</button>
            </div>
        </form>
    </div>
</div>

