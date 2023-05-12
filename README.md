

# 🖊️[studylab_console_php](https://student.here.study:10443/console/)  스터디카페 관리자 페이지  🖊️
  

  
![version](https://img.shields.io/badge/version-0.4.0-blue.svg) 

![Image](https://github.com/howon-ryu/studylab_console_php/assets/75923078/4b20a260-8e74-4354-90e8-7b66dfd75bc2)

studylab console 는 php 와 html/js/css를 기반으로 하는 스터티카페 관리자 페이지입니다.  
계층형 관리자 구조로 되어있으며 학생들을 관리하는 관리자(head,owner,manager)와 브랜드를 만들고 학생들의 일정을 관리할수 있는 studylab 백오피스 입니다.

[학원관리] - 본사/원장/메니저/지점 관리

학원 브랜드를 생성하고 상위 관리자가 하위관리자를 만들며 역할을 할당합니다.
이름, 로그인 id, 비밀번호, 전화 번호 등을 기본으로 가지며 role 에 따라서 권한이 제한됩니다.

[학생관리] - 학생정보

학생을 생성하며(studylab student) id, pw, 이름, 전화번호 등을 입력받고 group과 학습실, 좌석 번호등의 정보를 입력합니다.

[학습관리] - 지점학습현황/학생학습계획/학생학습이력

지점별 학생 학습 정보, 학생의 학습 계획/이력/레포트 를 관리합니다.



## ✈주요 상세 기능

**▷학원관리 - 본사/원장/매니저/지점 관리**  
  
  
[본사관리]  

<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/148fb669-465e-47dd-af36-c9dd4452c19a" width="300" height="200" />   
  
본사(brand)와 본사관리자(head)를 생성하고 변경사항을 관리합니다.


[원장관리]

<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/e57aa128-ee59-41f4-9703-c8d43fe1b584" width="300" height="200" />   

원장(owner)를생성하고 관리합니다.
원장은 반드시 한개의 본사에 소속되어있어야 하며 해당 브랜드의 head가 변경 권한을 갖습니다.


[매니저관리]

<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/7a5d0691-ccb8-4aa9-888f-654d13f03a6d" width="300" height="200" />   

매니저(manager)를생성하고 관리합니다.
매니저는 반드시 한개의 본사에 소속되어있으며 원장을 target으로 소속되어있습니다.
원장, head가 변경 권한을 갖습니다.


[지점관리]

<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/fd7fc913-502d-41ed-9b69-98aa1b18b3ac" width="300" height="200" />   

지점을 생성하고 관리합니다.
지점은 본사안에 있는 학원관이며, 관리그룹, 학습코드, 학습실을 만들고 관리합니다.




<br>

**▷학생관리 - 학생정보**
  
<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/4461309a-7f8d-471d-95d8-b69b86780603" width="200" height="200" />   
  
학생을 생성하고 관리합니다.
studylab timer 에 로그인할 id/pw와 학생정보를 입력합니다.
지점관리 에서 만들었던 관리그룹, 학습실과 학습실의 좌석을 선택할 수 있습니다.
학부모 정보를 입력받아서 학생의 학습 레포트를 송신할 수 있도록 합니다.

<br>

**▷학습관리 - 지점학습현황/학생학습계획/학생학습이력**
  
 
[지점학습현황]

<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/36799449-ac98-4758-8d03-cd159e2f538d" width="300" height="200" />   
  

지점별 학생들의 학습 현황을 확인합니다.
날짜별로 지점 소속학생들의 학습 정보를 확인할수 있습니다.
실제 학습실의 맨 앞에 스크린에서 보여줄 리더보드를 열수 있습니다.


<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/49066a3f-fd7b-45e5-ad59-ff3098d5001a" width="300" height="200" />   

slick.js를 이용하여 만들었으며 정해진 시간에 따라서 오른쪽으로 slide 합니다.
학습실의 좌석배치도와 학습인원수에 따라서 좌석 배열을 변경 할 수 있고, 현재 학습시간과 출석, 순공 비율을 한눈에 확인할 수 있습니다.
마지막 시트에서는 전체 학생들의 순위및 요약을 차트로 제공합니다.


[학생학습계획]

<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/a330623d-0c92-41dc-95b8-8f152afb1fac" width="300" height="200" />   

학생별 학습 계획을 확인하고 이력을 변경합니다.
studylab student에서 학생이 설정한 계획을 확인하고 변경 및 추가 할 수 있습니다.
'학습이력' 탭에서는'
계획한 학습 아이템을 바탕으로 이전날의 학습이력을 추가할 수 있습니다.



[학생학습이력]

<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/8b8334aa-4c98-4582-850c-65b1dfe65ef7" width="300" height="200" />   

기간에 따른 학생별 학습 이력 요약을 확인할 수 있습니다.
지난 학습에 대한 요약을 제공하며 레포트 보기를 통해 studylab student 와 같은 해당 학생의 학습 레포트를 볼수 있습니다.



<img src="https://github.com/howon-ryu/studylab_console_php/assets/75923078/478699f0-dee5-4df2-bd27-c2ecebee6240" width="300" height="200" />   

학생들의 학습과목, 만족도, 순공 시간/비율 등을 차트와 캘린더를 통해서 확인할 수 있습니다.
일/주/월 별로 누적된 공부 시간을 볼 수 있으며, amchart를 통한 가시적인 통계를 제공합니다.
레포트 안에 있는 달력은 fullcalendar를 바탕으로 하며, 해당 날짜 클릭시 클릭된 날짜에 맞는 일/주/월 정보를 제공합니다.
캘린더의 날짜를 클릭하면 해당 날짜의 학습 레포트를 볼 수 있습니다.
문자 전송 버튼을 통해 해당 학생의 학부모 정보로 선택한 날짜의 레포트가 전송됩니다.



<br>



**▷HELPFUL LINKS**


- View [Github Repository](https://github.com/howon-ryu/studylab_student_php_readme) - 스터디카페 학생 페이지
<br>


**▷Special thanks

이 프로젝트를 개발하면서 사용한 외부 소스 입니다.   

- [Fullcalendar](https://fullcalendar.io/) - 일정 계획 및 레포트 보기 달력
- [NHN_TOAST_SMS](https://docs.nhncloud.com/ko/Notification/SMS/ko/Overview/) - 레포트 sms 전송
- [AmCharts](https://www.amcharts.com/) - 레포트 가시화
- [Slick](https://kenwheeler.github.io/slick/) - 리더보드 슬라이드
- [DataTable](https://datatables.net/) - 학생 및 보드 정보 테이블
- [HighCharts](https://www.highcharts.com/) - 레포트 가시화

  
    <br>
      
## 📌 팀원 정보

😆 류호원 [@howon-ryu][https://github.com/howon-ryu]

👨 정민석 [@JamesDev51][https://github.com/JamesDev51]

  <br>
    

## 🛠 사용 기술


- ### **프론트엔드** - js, html, css

- ### **백엔드** - spring ,php

