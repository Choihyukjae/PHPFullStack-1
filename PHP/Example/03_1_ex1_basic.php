<?php
    # print : return O / echo : return X > echo를 많이 씀(속도)
    # \n 개행
    print "안녕하세요. \n";
    print ("안녕하세요. 괄호입니다. \n");

    echo "안녕하세요 에코입니다. \n";

    # var_dump : 출력하는 모든 데이터를 보여줌(형태 등)
    var_dump(print "안녕하세요");
    # var_dump(echo "안녕하세요");'

    echo "------------------- \n";

    # 변수 : 값을 담아서 코드 상에서 사용(정보 저장)
    # 특수문자는 언더바(_)만 가능, 영어 대/소문자, 숫자로 이루어짐
    # $로 시작, $ 다음 숫자,특수문자로 시작하면 안됨
    $test_num = 1;
    echo $test_num;

    // 네이밍 기법
    // 1. 카멜 기법 : 낙타의 등을 연상하여 
    // 단어의 첫 글자는 대문자, 나머자는 소문자로 작성하는 기법
    // 예 ) $TestNum
    // 2. 스네이크 기법 : 뱀을 연상하고 
    // 단어와 단어 사이를 언더바(_)로 이어주고 전부 소문자로 작성하는 기법
    // 예 ) $test_num

    
?>