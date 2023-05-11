

# 🖊️[studylab_console_php](https://student.here.study:10443/console/)  스터디카페 관리자 페이지  🖊️
  

  
![version](https://img.shields.io/badge/version-0.4.0-blue.svg) 

![Image](https://github.com/howon-ryu/studylab_student_php_readme/assets/75923078/ffb4cdbe-64e0-4a7e-9e46-0599daac3bf1)

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

<img src="https://github.com/howon-ryu/studylab_student_php_readme/assets/75923078/df1055e3-2abf-4768-b0ec-ddccca50464a" width="300" height="200" />   
  
본사(brand)와 본사관리자(head)를 생성하고 변경사항을 관리합니다.


[원장관리]

<img src="https://github.com/howon-ryu/studylab_student_php_readme/assets/75923078/4256ecad-8d74-4436-b933-61b0d656c7bd" width="300" height="200" />   

원장(owner)를생성하고 관리합니다.
원장은 반드시 한개의 본사에 소속되어있어야 하며 해당 브랜드의 head가 변경 권한을 갖습니다.


[매니저관리]

<img src="https://github.com/howon-ryu/studylab_student_php_readme/assets/75923078/ded729e2-9a53-42c3-8fdd-938f65295bc2" width="300" height="200" />   

매니저(manager)를생성하고 관리합니다.
매니저는 반드시 한개의 본사에 소속되어있으며 원장을 target으로 소속되어있습니다.
원장, head가 변경 권한을 갖습니다.




<br>

**▷타이머()**
  
<img src="https://user-images.githubusercontent.com/75923078/226616896-0a808fbf-58fa-47d8-b2f8-f5b6ac0b88ce.png" width="200" height="200" />   
  
to do list에 있는 일정을 클릭 후 '선택' 버튼을 누르면 타이머를 사용할 수 있습니다.
타이머를 실행하면 공부 시간이 측정되며, 이 시간은 순공시간으로 저장됩니다.
reverse 버튼을 통해 스톱워치 모드로 변경 할 수 도 있습니다.

<br>

**▷평점(done 버튼)**

to do list 에 있는 일정에 done 버튼을 클릭하면 평점을 설정할수 있습니다.
1~5 점까지 0.5 사이의 점수를 해당 일정에 매길 수 있습니다.

<br>

**▷레포트(학습 레포트)**
  
<img src="https://user-images.githubusercontent.com/75923078/226617312-1e5d4113-c93d-4d5d-a46c-c18b920b5c9b.png" width="300" height="200" />   
  
학습 레포트 버튼을 누르면 볼 수 있습니다.
일/주/월 별로 누적된 공부 시간을 볼 수 있으며, amchart를 통한 가시적인 통계를 제공합니다.
레포트 안에 있는 달력은 fullcalendar를 바탕으로 하며, 해당 날짜 클릭시 클릭된 날짜에 맞는 일/주/월 정보를 제공합니다.

<br>

**▷상벌점(예정)**

<br>


**▷HELPFUL LINKS**

- View [Github Repository](https://github.com/howon-ryu/studylab_console_php) - 스터디카페 관리 콘솔
<br>


**▷Special thanks

이 프로젝트를 개발하면서 사용한 외부 소스 입니다.   

- [Fullcalendar](https://fullcalendar.io/) - 일정 계획 및 레포트 보기 달력
- [NHN_TOAST_SMS](https://docs.nhncloud.com/ko/Notification/SMS/ko/Overview/) - 레포트 sms 전송
- [AmCharts](https://www.amcharts.com/) - 레포트 가시화

  
    <br>
      
## 📌 팀원 정보

😆 류호원 [@howon-ryu][https://github.com/howon-ryu]

👨 정민석 [@JamesDev51][https://github.com/JamesDev51]

  <br>
    

## 🛠 사용 기술


- ### **프론트엔드** - js, html, css

- ### **백엔드** - spring ,php

