#Git 簡易使用教學

##安裝 Git
到下列網址安裝

我覺得都預設安裝就可以了

<http://git-scm.com/>

開啟 `Git Bash` 或是加入環境變數的 `CMD` 下使用

##如何將檔案複製到本機
在 `CMD` 指令列輸入

    cd C:\wamp\www\
    git clone 
    git clone xxxxx
xxxx 就是說 `GitHub` 首頁的那個連結網址喔
例如我的是 

    https://github.com/Negaihoshi/RentalPlatform.git

這樣就可以複製到電腦裡囉~~~

##如何 Pull Request
在我的 Repository 大約右上的位置有個 `fork` 按鈕

<https://github.com/Negaihoshi/RentalPlatform>

他會將我的 Repository 複製到你的 Repository 裏面

今天你寫了不少程式碼

你要推給我

首先先更新自己的 Repository

    git add * or git add 檔案名稱

\* 是代表全部新增，add 是一個一個新增，按下 enter 如果沒有出現其他訊息就是完成新增。

    git commit -m "xxxx" or git commit

指令 commit 是讓你說明你為什麼要做這個變更的指令，像是 Update xxxx file ，-m那一個是快速新增，後面要接標題。

git commit 輸入後會出現編輯視窗，按 Insert 按鍵(在方向鍵上面)開始輸入，# 那一行是代表註記，那邊會寫你更動了哪些檔案，那些檔案被變更且已經被 add 了。

從最後一個 # 的下一行開始輸入，輸入完標題還想寫詳細一點的，可以再繼續寫，但是標題跟詳細內容請中間格一行，最後要存檔時按 ESC 退出編輯模式，然後在鍵盤上面打 `:x` 儲存離開。

新增完後就可以 push 到你的 repository 了\0.0/
    
    git push origin master 

這個是將你這邊的 origin 分支推到 master 分支

這個之後我們在討論說明

輸入後他會問你帳號密碼  然後就會~~~~~~~~跑完惹

然後就到你的 GitHub 然後邊看下面這個文件 pull request 給我吧

<http://ncu-csie-snmg.github.io/2013-NCU-CSIE-Website-Design-Competition/pullrequest.html>