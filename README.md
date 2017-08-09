# S.M.R-Project

APMSetup을 사용하여 서버관리를 하고있습니다.
모든소스는 https://github.com/teagunnNa/S.M.V-Project/ 에 존재합니다.<br><br>
제작자: 나태근, 이준범, 박수영, 이윤배
## main
* index.php
> main1 페이지로 이동합니다.
* main1.php
> 로그인 전의 메인페이지입니다.
* main2.php
> 로그인 후의 메인페이지입니다.
* config.php
> MySQL과 연동시켜 주는 페이지입니다.
## Login
* login.php
> 로그인 화면을 보여주는 페이지입니다.
* SignUp.php
> 회원가입 페이지입니다.
## Manager
* mAdd.php
> 시설추가 페이지입니다.
* managerAllowed.php
> 예약승인을 처리하는 페이지입니다.
* managerDelete.php
> 예약거절을 처리하는 페이지입니다.
* mDelete.php
> 삭제할 시설물을 선택하는 페이지입니다.
* mInsert.php
> mIndex.php에서 선택된 place_id를 mAdd.php로 넘기는 페이지입니다.
* mDeleteExecution.php
> mDelete.php에서 선택된 시설물을 삭제하는 페이지입니다.
* mDeleteThrow.php
> mIndex.php에서 선택된 place_id를 mDelete.php로 넘기는 페이지입니다.
* mLogin.php
> 관리자 로그인 화면을 보여주는 페이지입니다.
* mIndex.php
> 관리자의 메인화면을 보여주는 페이지입니다.
## Status
* StatusMap.php
> 특정 호실의 예약현황을 보여주기 위해 건물을 선택하는 페이지입니다.(로그인 후)
* StatusMapOut.php
> 특정 호실의 예약현황을 보여주기 위해 건물을 선택하는 페이지입니다.(로그인 전)
* StatusPic.php 
> 특정 호실의 예약현황을 보여주기 위해 호실을을 선택하는 페이지입니다.(로그인 후)
* StatusPicOut.php
> 특정 호실의 예약현황을 보여주기 위해 호실을을 선택하는 페이지입니다.(로그인 전)
* StatusTable.php
> 특정 호실의 예약현황을 보여주는 페이지입니다.(로그인 후)
* StatusTableOut.php
> 특정 호실의 예약현황을 보여주는 페이지입니다.(로그인 전)
## Display
* roomClick.php
> 디스플레이 기기에 보여주기 위한 페이지를 선택하는 페이지입니다.
* roomDisplay.php
> 디스플레이 기기에 보여지는 페이지입니다.
## Reservation
* calendar.php
> 달력을 보여주는 페이지입니다.
* timetable.php
> 예약가능한 시간을 보여주는 페이지입니다.
* TimeTest.php
> 선택된 시간이 예약되어 있는 시간인지 아닌지 판단해주는 페이지입니다.
* reservation.php
> 예약된 내용을 보여주고 예약 목적을 선택하는 페이지입니다.
* submit.php
> 예약된 내용을 저장하는 페이지입니다.
* script.js
> 달력을 보여주는 라이브러리입니다.
