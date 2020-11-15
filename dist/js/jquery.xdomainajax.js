/ **
jQuery.ajax 중반 - CROSS DOMAIN AJAX *
    -- -
    *
    @author James Padolsey(http: //james.padolsey.com)
        *
        @ 버전 0.11 *
        @updated 12 - JAN - 10 *
        -- -
        *
        참고: README를 선택하십시오!
        *
        -- -
        *
        @info http: //james.padolsey.com/javascript/cross-domain-requests-with-jquery/
        *
        /

        jQuery.아약스 = (함수(_ajax) {

            var 프로토콜 = 위치 입니다.프로토콜,
                호스트 이름 = location.호스트 이름,
                exRegex = 정규식(프로토콜 + '//' + 호스트 이름),
                YQL = 'http' + (/ ^ https /.test(protocol) ? 's' : '') + ': //query.yahooapis.com/v1/public/yql? 콜백 =? ',
                query = 'select * html에서 url = "{URL}"및 xpath = "*"';

            함수 isExternal(url) {
                돌아와!exRegex.테스트(url) && / : \ /\ / / . 테스트 ( URL ) ;
            }

            반환 함수(o) {

                var url = o.url;

                경우(/ GET /
                    I.테스트(오.형) && !/ JSON /
                    I.테스트(O.dataType와) && isExternal(URL)) {

                    // JSONP-x 요청이 YQL에 이루어 지도록 옵션 조작

                    o.url = YQL;
                    o.dataType = 'json';

                    o.데이터 = {
                        q: 쿼리.교체(
                            '{URL}',
                            url + (o.데이터 ?
                                (/ \? /.test(url) ? '&' : '?') + jQuery.param(o.data) :
                                '')
                        ),
                        형식: 'xml'
                    };

                    // JSONP 요청이므로
                    // 완료 === 성공
                    if (!o.성공 && o.완료) {
                        o.성공 = o.완료;
                        o를 삭제하십시오.완료;
                    }

                    o.성공 = (함수(_success) {
                        리턴 함수(data) {

                            if (_success) {
                                // 가짜 XHR 콜백.
                                _ 성공.전화(this, {
                                    responseText: (데이터.결과[0] || '')
                                        // <script>가있는 YQL 나사
                                        // 그들을 제거
                                        .바꾸기(/ <script [ ^> ] + ? \ / > | < script(. | \s) * ? \/ script> /
                                            gi, '')
                                }, '성공');
                            }

                        };
                    })(o.성공);

                }

                _ajax를 리턴 하십시오.적용(이것, 인수);

            };

        })(jQuery.ajax);