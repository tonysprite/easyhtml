SQLite format 3   @    �  �  0  7   [                                                � .$�   �    ����                                                                                                                                                                                                                                                       i	}W indexsqlite_autoindex_sqlitebrowser_rename_column_new_table_1sqlitebrowser_rename_column_new_table       P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�\�tableuseruserCREATE TABLE `user` (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直   2   	0   ,   (                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              � �������d                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              )Wsqlitebrowser_rename_column_new_table� page_historyuser� pa%page_history �	pagevitemusercatalog   
user   s ��A�s                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               A !    M zhanglibinb817ea5dc158f4a3e0977d5b11d352390_�_�J 3    M catchyouhand@qq.comf0f598379cd919f10b54afea3de477110_�
_�=     M adasq1131306907bd0c8f003f56744e610c5820Y��Y��@     M baihongye13cfd8c963bcb18d6661f126e056ff8c0Y���Y��E>     M showdocaf126591e588f595e3a8e9cac2e0801b0W���Y�+5;     M test90b4f228672a96098f2991f3c6863b030Y�5�Y�S�^  �  �� � � � � � � � =                                 ^ 	�)5f3c8c2be2f4b0820ede56163c574c59499cc8ef29c064d553e478c6904dfd5aZ)~61.148.196.162Y��~^
 	�)61de227a8a1a203aa58716376ef42ca6251841e3653e4866e3c6e9a7963287faZ361.148.196.162Y�x3^^ �'3e7d30f3de4c3167bde99d07f782bd7c1d18dcddc6abf4839bb172939bff39a5_�j124.193.69.66_�  B�+a619ecc6dc2330fb0e54d812ea1bf0b1768ce720e36b0a973c1e57a24ca6e13cZ2�118.113.211.179Y��  @	�)5015d617be348f4476f9203b9c1478d152c7ab6f35761338e00dd8af5a1c2870Z,�561.148.196.162Y�+5  �	�)b7c896143dc108c7a5698d634ff10c47eb79e618a9e64fbf6c70d86592a23e0eZ&y�61.148.196.162Y���  �	�)59c55c2df8984b25729fd05ef93d888f6e2861463d4d8e114e511842e10b8b64Z&xW61.148.196.162Y��W   	�)3c3cc8a713eaa6dea7ff2ed70c2ddb901e2a5da5ef908f7721923cc7cc2d65feZ&v�61.148.196.162Y�϶   ��'3dd56410d706f046cc3e083eb2e148cfdebff2c623128e389f2180d9c417113dZ&oE117.73.243.25Y��E^ �'bea5711bd7cc3a277c622049e8e1a35b029a67ae55d28d66d401a47d6e4b307b_�l124.193.69.66_�   � �?           Q��  � �     (�*                    ��xsqli��*                    V �renam��*    �A?    �A?    6 Lrowse�A?           Q��  h ��   0�*    �A?    �A?    �W in                        tebrowser_rename_column_n   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )'.; indexsqlite_autoindex_page_1page�>/%%�?tablepa�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
 �	 	=�Ishowdoc微生活API接口模板
    
**简要描述：** 

- 用户注册接口

**请求URL：   �    � �A? �                                                                                                                             �v(�OtableitemitemCREATE TABLE "item" (
	`item_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_name`	TEXT,
	`item_description`	TEXT,
	`uid`	INTEGER,
	`username`	TEXT,
	`password`	TEXT,
	`addtime`	INTEGER,
	`last_update_time`	INTEGER DEFAULT 0
, item_domain text NOT NULL DEFAULT '', item_type INT( 1 ) NOT NULL DEFAULT '1', is_archived INT( 1 ) NOT NULL DEFAULT '0')5!I# indexsqlite_autoindex_item_member_1item_member� ##�Etableitem_memberitem_member
CREATE TABLE "item_member" (
	`item_member_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_id`	INTEGER,
	`uid`	INTEGER,
	`username`	TEXT,
	`addtime`	INTEGER DEFAULT 0
, member_group_id INT( 1 ) NOT NULL DEFAULT '1')P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直接下载`	INTEGER
)   & &O��J                     � +�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cook'); indexsqlite_autoindex_item_1item�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)� +�tablecatalogcatalogCREATE TABLE "catalog" (
	`cat_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`cat_name`	TEXT,
	`item_id`	INTEGER,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, parent_cat_id INT( 10 ) NOT NULL DEFAULT '0', level INT( 10 ) NOT NULL DEFAULT '2')-,A indexsqlite_autoindex_catalog_1catalog    �  �5^�                                                                                                                                                                                                                           �G-�qtablepagepageCREATE TABLE "page" (
	`page_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, page_comments text NOT NULL DEFAULT '')'.; indexsqlite_autoindex_page_1page�f/%%�tablepage_historypage_historyCREATE TABLE "page_history" (
	`page_history_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`page_id`	INTEGER,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER,
	`addtime`	INTEGER
, page_comments text NOT NULL DEFAULT '')70K% indexsqlite_autoindex_page_history_1page_history                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
         
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       �   �������Ёetest大幅eNp7tmbRi/19T/bufz5lRXFGfnlKfvLjhqbnTTuftu9+2r/5yY6uZ9N2Pp/V8nzPtBf7Jj7r6Xw5ad2L/bNfLOyBiDydsPz9nkYAkkUwPA==cY�T5   o 	7�E@showdoc堡垒机使用手册eNqtlE1PGlEUhtfwK6bppl0IyIdKt02TdmeqTdo0XSBMqwlRI9huQQvyMSO   �u� 	%�%Ashowdoc	默认页面eNpdkM1qAjEQx+/7FAGv3SJCQTyXUoSqsNu32YNrW1SojdRvqnbBz4Ouihdrt+7LZCbxLZpkUwrOKZn/7zcZkkrh2wzoRCyeoTawLI/IEnMfdxWiSzWQUhFv1cXycrYsHdjm5CmJRYE4tbD7BRHVEjscWTwSG58dp9hvQViHlyWWF1fnapW3l+TedUuO0ZIRSJuK/R9hyFLRcYls476TIAbvbLERYhD94UkI768ibsPHOMnPTz9yE5J3igViWG3DusdXcx51eeBrm39/skPZPPno3tnZS0ZpfH2CZoOHPbmM1h5ub8w6+ht5vYbDlU4y12mZWL936LKVcY����u� 	%�%Ashowdoc	接口规则eNpdkM1qAjEQx+/7FAGv3SJCQTyXUoSqsNu32YNrW1SojdRvqnbBz4Ouihdrt+7LZCbxLZpkUwrOKZn/7zcZkkrh2wzoRCyeoTawLI/IEnMfdxWiSzWQUhFv1cXycrYsHdjm5CmJRYE4tbD7BRHVEjscWTwSG58dp9hvQViHlyWWF1fnapW3l+TedUuO0ZIRSJuK/R9hyFLRcYls476TIAbvbLERYhD94UkI768ibsPHOMnPTz9yE5J3igViWG3DusdXcx51eeBrm39/skPZPPno3tnZS0Zpf  �	   ��   �   g�   7�   1�   @�   �   7 7�                    �=.    @�*                                         �=.    ��*                                         �=.    p�*                                        �=.                                                   �=.    8C?    I                                   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )      0�=    ��=    0X\                  Y       �*�     �*�                    Q       0        �=    ��=    0�=                                            �      Q       �)�     �)�     �=    ��=    ��=                                    1       X       ��=                                  1       �&�     �n5    Y       �                      ��=    X�=    0�=     �=                            1                     ��=                   Y       0                     H�=     �=            ��=                            Y       �      �              ��=    ��=    �=    ��=                            1       �E      ��=                          Y       �E      �              (�=    ��=    �=    ��=                            !       F      :       X�=    �      !       x�=    x�=    H�3                    1       ��=    ��=    H�3                    ��=    @�=    0X\                  Y       �*�     �*�                    Q       0       ��=    � x�v�A�x�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    � 6?		ftp使用手册_+ 3	sqlcatchyouhand@qq.com_Ä_��' 3	phpcatchyouhand@qq.com_Ð5 )3	sqlcatchyouhand@qq.com_Ä< 7	baihongye白鸿叶项目文档baihongyeY��;Y��2   11	3	 %%		API V2文档API V2文档showdocY��yY���$ 	dfasfdsadafdasftestY�Tv/ +大幅打发范德萨testY�T5Y�T?       * 3	算法catchyouhand@qq.com_�-    q k7f� qE   7                             i#}W indexsqlite_autoindex_sqlitebrowser_rename_column_�w7�Atableitem_topitem_topCREATE TABLE `item_top` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `uid` int(11) NOT NULL DEFAULT '0' ,
        `addtime` int(11) NOT NULL DEFAULT '0' 
        )�I3�itableoptionsoptionsCREATE TABLE `options` (
        `option_id`  INTEGER PRIMARY KEY ,
        `option_name` CHAR(200) NOT NULL UNIQUE ,
        `option_value` CHAR(200) NOT NULL 
        )-4A indexsqlite_autoindex_options_1options�b5!!�tableitem_tokenitem_tokenCREATE TABLE `item_token` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `api_key` CHAR(200) NOT NULL UNIQUE ,
        `api_token` CHAR(200) NOT NULL ,
        `addtime` int(11) NOT NULL DEFAULT '0' ,
        `last_check_time` int(11) NOT NULL DEFAULT '0' 
        )36G! indexsqlite_autoindex_item_token_1item_token` 1$   $*06<BHNTZ���������������������|vpjd^XRLF@:4.("��������������������������������������������������������������������������|�  +�M  /�L  .�I  1�H   �Y   �[   n�\   Ձ]   ~�^   ہ`   z�b   y�c   ��d   !�e  ��gl �gr �g   �5~ �6� �g� �g� �g� �<� �g� �g� �@� �g� �g   �C� �D   �E� �F   �G� �H� �J� �L� �N� �P� �g� �g   �S �T   �U �V �g  �g& �g, �g2 �g8 �]> �_D �g   �aP �bV �g\ �gb �gh �gn �gt �jz �g� �g� �g   �n� �o� �q   �r� �t� �v   �w� �x   �y� �z   �{� �}� �g� �g� �g� �g� �g� �g� �g� �g �   �	 �
 �g  
�u  �s  �r  �q   �o   �n   �l   c�j   i   ��h   I�g   m�f   ^�d   ��b   -�]   0�\   '�[   <�Z   2�X   ��W   ��U   �T   ��S   5�R   8�Q   9�O   =�N   >�M   s�L   B�J  �I   q�H   ߆G   ��F   ��E  M�D   ��C   l�A    �?
� H  (08@HPX`hpx�������������������xph`XPH@80(  ����������������xph`XPH@����������������������
 � � � � ����������������� � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �� ���   ��   ��   ��   ��   ��   ��   ��   ��   ��                             vvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCC??� @@AA   BB
                                                                              	�            p:!    	�            H=!                          	�            �8!                                                                    	�            >!    	�            �=!                         	�            89!                                               w =                                                          XL    h8!                                        XL    >!                                        XL    �=!                                       XL    �2!                                        XL    89!                                        XL    �9!                                                                                                                                                                                                                                                                        
� � �������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            		     p����fI,����p                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ! 1异业营销接口	
Y�� %查询接口		Y��� 券接口	Y��� %积分接口	Y�Ѷ %	接口说明	Y��� %生日活动cY��t� %we %交易接口	Y�ѓ %商家接口	Y�ш %等级接口	Y��| %用户接口	Y��r dafdsafcY�T�  wedatascY��   we   #1 %储值接口	Y�ѫ
� � �������������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
� ~ ��~����������~~~~~~~nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----  ��oo�|nn�vmm�pll�jkk�djj�^ii�Xhh�Rgg�Lff�Fee�@dd�:cc�4bb�.aa�(``�"__�^^�]]�\\�
[[�ZZ��YY��XX��WW��VV��UU��TT��SS��RR��QQ��PP��OO��NN��MM��LL��KK��JJ��II��HH��GG��FF��EE��DD�zCC�tBB�nAA�h@@�b??�\>>�V==�P<<�J;;�D::�>99�888�277�,66�&55� 44�33�22�11�00�//� �..� �--� �,,� �++� �**� �))� �((� �''� �&&� �%%� �$$� �##� �""� �!!� �  � �� �� �� �� �� �� ~� x � � � ��  � �� Z� T � � � � � � � � � � � � � � � � � � � �   
   pp   N �;�p�N          	�� 	          �K�    	�            XN�     �                   	��           �L�     �                                         w                                                                                                                                                           _ _a
3bc20d9f90d9fbc24ef8fd68685182ae48829594139a854e7922be05dc3423369b5887ce41491116759Y���_ _a	65f8f5b4bc48ac13bfb298891d33addb8848725948fe29a5a520350e65dd921a46c0561261813800788Y���^ __4e12f2f58c6b81ebdccefa8c783b57894786961118b48c9843e48941f75b178bb73d85c53402617184Y���d aa66341e3bc731e7ea22f78203039e497820063991217c956be8c4b013a5010318f160ef58dd1411345751Y���Y�35c _a42c6f457f6466afb3e65008edd233fb9720210258e92d646077b33d43c6a19ac5a595b2c61286907121Y���Y��{c a_34dece42dde6cb3a96aeab81337954b018450773532ee6261b1d87e598fe689981fefe52f1609865300Y�h�Y���^ 	_a322bfa66a2980d01377dd9dcad5da9df497019699be152a7dcc1f084afb1f7856033f3c501843659749Y�]�
   � ���v�G                                                                                                          Q     ؾ���  �ќ                            B                     *                                              "                       %       Y               x�             ��    x�      
       ��                                                                                                                                                                                                                                                                                                                                                                       -_3bc20d9f90d9fbc24ef8fd68685182ae488295941-_65f8f5b4bc48ac13bfb298891d33addb884872594-_4e12f2f58c6b81ebdccefa8c783b5789478696111.a66341e3bc731e7ea22f78203039e49782006399121-_42c6f457f6466afb3e65008edd233fb9720210258.a34dece42dde6cb3a96aeab81337954b01845077353,_	322bfa66a2980d01377dd9dcad5da9df497019699       �                                                                                    �    ���    ؠ�              � �      �3��3�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      00000                    �/                            �/                            `��G                                          �                     ��������                �              �      ��     ��      
          !                                                                                   �  � � �                                                                                                                                                                                     �U�Y  E�Ifrom_apiwedatas_stat_product_daily_t|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | sdate | text | YES |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | plNo | text | YES |  |  | 
 | totalNum | double | YES |  |  | 
 | totalMoney | double | YES |  |  | 
cY��l �+test大幅欢迎使用showdoc。点击右上方的编辑按钮进行编辑吧！dasfdsaf cY�T?   n  %�from_apiwelife_shops|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|---"�X  from_apiwedatas
cY���]�W  7�gfrom_apiwedatas_consume_count|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | sid | int(25) unsigned | NO |  |  | 
 | bi_shu | int(11) unsigned | NO | 0 | 笔数 | 
cY��   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                �2�v  O�yfrom_apixb_dprpt_welife_cross_charge_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO | 0 |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | recetcstoredpay | bigint(20) | NO | 0 | 应收储值金额 | 
 | recetclprinciple | bigint(20) | NO | 0 | 应收储值现金 | 
 | paytcstoredpay | bigint(20) | NO | 0 | 应付储值金额 | 
 | paytclprinciple | bigint(20) | NO | 0 | 应付储值现金 | 
cY��& �    �   � �etest大幅eNp7tmbRi/19T/bufz5lRXFGfnlKfvLjhqbnTTuftu9+2r/5yY6uZ9N2Pp/V8nzPtBf7Jj7r6Xw5ad2L/bNfLOyBiDydsPz9nkYAkkUwPA==cY�T5   o 	7�E@showdoc堡垒机使用手册eNqtlE1PGlEUhtfwK6bppl0IyIdKt02TdmeqTdo0XSBMqwlRI9huQQvyMSO   �u� 	%�%Ashowdoc	默认页面eNpdkM1qAjEQx+/7FAGv3SJCQTyXUoSqsNu32YNrW1SojdRvqnbBz4Ouihdrt+7LZCbxLZpkUwrOKZn/7zcZkkrh2wzoRCyeoTawLI/IEnMfdxWiSzWQUhFv1cXycrYsHdjm5CmJRYE4tbD7BRHVEjscWTwSG58dp9hvQViHlyWWF1fnapW3l+TedUuO0ZIRSJuK/R9hyFLRcYls476TIAbvbLERYhD94UkI768ibsPHOMnPTz9yE5J3igViWG3DusdXcx51eeBrm39/skPZPPno3tnZS0ZpfH2CZoOHPbmM1h5ub8w6+ht5vYbDlU4y12mZWL936LKVcY����u� 	%�%Ashowdoc	接口规则eNpdkM1qAjEQx+/7FAGv3SJCQTyXUoSqsNu32YNrW1SojdRvqnbBz4Ouihdrt+7LZCbxLZpkUwrOKZn/7zcZkkrh2wzoRCyeoTawLI/IEnMfdxWiSzWQUhFv1cXycrYsHdjm5CmJRYE4tbD7BRHVEjscWTwSG58dp9hvQViHlyWWF1fnapW3l+TedUuO0ZIRSJuK/R9hyFLRcYls476TIAbvbLERYhD94UkI768ibsPHOMnPTz9yE5J3igViWG3DusdXcx51eeBrm39/skPZPPno3tnZS0ZpfH2CZoOHPbmM1h5ub8w6+ht5vYbDlU4y12mZWL936LKVcY��   w6    ����������� &,28>DJPV\bhntz����������������������
"(.4:@FLRX^djpv|��������������������������������~xrlf`ZTNHB<60*$       2�   1�   ��   .�   ��   ��   ,�   ��A   v�?   ��=   ��:   ߆8  ��7  ��6  �5   l�4   s�3   ?�1   >�0   u�/   ��.   *�,   8�*   g�)   6�(   7�&   4�#   3�!   :�   ��   ��  X�%  W�&  U�(  S�*  P�+  O�-  K�/  0�2  F�3  E�4  H�5  C�6  B�8  D�9  @�:  ?�<  <�=  =�>  ;�@  8�A  9�B  7�C  5�D  3�E  4�F  2�G  1�H  .�I  /�L  +�M   P�O  (�Q  '�R  $�S  !�T  "�U  �V  �W  �X  �Y  �Z  �[  �]  �_  �`  �a  �b  �c  �d  �e  
�f  �g  �i  ��k  �l  �m  �n  �o   ��p   �r   ��t   ޅu   ��w   ��x   e�y   w�z   ˅{   م}   �~   |�   c�    ��      ц   I�   m�   H�   �	   ��
    �   ̆   ��   (�   0�   ��   +�   ]�   ,�   ��   ��   .�   ��   1�   2�   ��    ?  ?                                                     �=�u  9�%from_apixb_dprpt_welife_credit|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO | 0 |  | 
 | ftime | int(11) | NO |  | 日期 | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | credit_reward | bigint(20) | NO | 0 | 奖励积分 | 
 | credit_consume | bigint(20) | NO | 0 | 抵现积分 | 
 | credit_gift | bigint(20) | NO | 0 | 换礼积分 | 
 | cancel_credit_consume | bigint(20) | NO | 0 | 撤销抵现积分 | 
 | cancel_credit_gift | bigint(20) | NO | 0 | 撤销换礼积分 | 
 | credit_amount_unused | bigint(20) | NO | 0 | 未使用积分 | 
 | credit_manual | bigint(20) | NO | 0 | 积分手工调账 | 
 | opencard_send | bigint(20) | NO | 0 | 开卡赠送积分 | 
 | opencard_event_send | bigint(20) unsigned | NO | 0 | 开卡事件赠送积分 | 
 | upgrade_event_send | bigint(20) unsigned | NO | 0 | 升级事件赠送积分 | 
cY��&   4 4��                     �  ?�W�d�f  %�from_apiwelife�d�f  %�from_apiwelife_shops|字段|类型|空|默认|注釒d�f  %�from_apiwelife_shops|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  |�d�f  %�from_apiwelife_shops|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | sid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | cid | int(10) unsigned | NO | 0 |  | 
 | areaId | int(10) unsigned | NO | 0 |  | 
 | sName | varchar(128) | NO |  |  | 
 | s   ��g  from_api      cY����*�? I�mbaihongye生日活动赠券问题排查生日赠券的排查步骤：

1，welogs库的welogs_user_birthday_logs用bid和uid查找是否有该用户的生日数据，如果没有，去c1机器上查找setUserBirthday队列的child日志中看是否有关于该用户的消息推送，cons   �    �  �2�Hf  %��d�f  %�from_ap�d�f  %�from_apiwelife_shops|字段|类型|空|默认|注释|
|:----    |:------�n�e  )�from_apiwelife_qrcodes|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | qrid | varchar(32) | NO |  |  | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | sid | int(10) unsigned | NO | 0 |  | 
 | aid | varchar(32) | NO |  |  | 
 | cid | int(10) unsigned | NO | 0 |  | 
 | qChannelType | int(10) unsigned | NO | 0 |  | 
 | qUse | varchar(10) | NO |  |  | 
 | qUrl | varchar(1024) | NO |  |  | 
 | qDesc | varchar(1024) | NO |  |  | 
 | qCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | qUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | qDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | qStatus | tinyint(3) unsigned | NO | 0 |  | 
 | qSceneId | int(11) unsigned | NO | 0 | mp scene value | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��   #p://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)   $     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    ��：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


W:��                                                              &quot;total_fee&quot;: 70700,
          &quot;fee&quot;: 50500,
          &quot;award_fee&quot;: 20200
        },
        &quot;charge&quot;: {
          &quot;total_fee&quot;: 91100,
          &quot;fee&quot;: 70800,
          &quot;award_fee&quot;: 20300
        }
      },
      &quot;shop_online&quot;: null
    }
}

```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
|  shop_offline   |   array  |  门店线下储值统计|  |
|  shop_online   |   array  |  门店在线储值统计|  |

**储值统计charge / 撤销储值统计charge_cancel**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
|  total_fee   |   int  |  储值总金额|  |
|  fee   |   int  |  储值实收总金额|  |
|  award_fee   |   int  |  储值赠送总金额|  |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��/    储值
备注：储值实收金额+储值赠送金额=总储值金额

**请求URL：** 
- ` /charge/change `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno | bigint | 用户卡号 | 数字 |  是 |
  | shop_id | int | 门店id | 数字 |  是 |
  | money | int | 储值实收金额(单位:分) | 数字 |  是 |
| award_money | int | 储值赠送金额(单位:分) | 数字 默认：0 |  否  |
  | change_type | int | 储值调整方式 | 数字 1:增加   2:减少  |  是 |
  | remark | string | 储值备注 | 字符串 |  是 |

 **返回示例**

``` 

```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| deal_id              |  string  |   储值交易id    |  1535178031641110       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���                                         .  .                                    �N�[ 	%�]showdoc	交易冲正
    
**简要描述：** 

- 预消费冲正，冲正过的消费不可以进行提交
备注：系统自动冲正半个小时未提交的交易

**请求URL：** 
- ` /deal/rollback `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | biz_id | string | 交易业务号，收银方保证唯一，交易预览时提交的biz_id | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result              |  string  |   冲正结果  SUCCESS:成功  FAIL:失败  |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���    YgZFVwJ+v5+4PFJT4e4l7BWWrRpQCa8KXg++MxknRKUViVk8OcCGhv50SvgfcSGTgjbJrgz2Pq3OrFAXc1IwEAyEAsHQCPx3HjyvK70E0k2NpJcbiTuwM7AnaErbm3T3hXHU0G+W+TbHx8fhZpKffbxIYrJSNC3J/Yop+CwT/2eO5VgkHekuoFp3JaPGugtWjbDSoVsKds1vgUcUykgI/g3S6Jem65fGRZOtzA4Sn9AgpD1XAsS9rCkT4bTaZz8UHL0/GpJGxwZBTkZS6fBkckJNDFD1OzV+8fEfiKoj2tjrI2tEu++klvMDJ2XzTDzYVOs+i49ev4HTs5k2TDzfNslu+3D6pKNAL691TiZhCFOrGoN7C3TUG2tscYOunrO3OXZ+yXOKEJNGgtAC3PcHJYicJPkd8I8UTX04HU7FUyj6IJmcRGi8xpi1jf0z6HM7pyuQ6C0X0lpGkXGVkIeRyZQiejlrwos/FUmlfkxqse4GBpuxyl9t3jjI/TvGJrQItPzeYGGVRGOOIo0hE+9WC0bjxFy44M3M2SKMe6/mpVNcpYVt5EgiMykc//k2ykPhh242CGbw+RfhWbeT7z9Bp0vOzp6ur9ke8tZLTOrvtz3tPjqJivr1vkXkxV9BElUse5Kfp5heqKyXAfIveYTtuccja1KYcr0zfMQl1JlEg4GgFHB4pClRRX2khD2efdQ9Xq5ePaNLbzxeYTl0emUdphC2D9NvB8cZGezC/wSNPC5Aju/mAWcHZuFa4ci2RD+LRoeGvIs85f8/ZB/0S431nQJsklXKbK+NazyIgaAzbU1PKbefIWjbOxC6sv1qJWQDsl3pHZiiJ3MBWv1UFxPbMmst6Kf5OTcswlivrYPdgursvGH5uTs2nA2QysShcZ8e5ASynu2V9eaVXl/rbK/TwpUlx5plqPMAyVsqIefcG7R2t4YL32iR1NZa7+bw+oVvDNafJtnuJT3aQSp1NrfNGjRwLyGjmrV3RmnZOYN/1PT5fH8ArF37og==Y���   (JPxOpTU1MQEDODJWeAcBo8V3aN54fazXfxOGtmqok/ohORVWYzBSE2n4jVHrPK/QxnMxDXsATZdONJL6QVU0l9rmFZwPfbJ1q04ykcrElXAknswIDac5mxaf0tWn+vtVGRhxZxAODKci03ElkfYC9XPHhQXshGh2mltm9UivN/yDnexix5MxxbG1Hl96apKMxITYB2SbmvAUlCFydD6PFIWJkGyTFJ5GZaPR1utL1vI92di+oY1j46JmvLkg92XjZg24S8iYbMxem7XHRPLLnMDNZ4RIkowchyEYdbDcfaSZB+EHkclIIqp44mxlAHHx/knA6fpxDy2qKTE1PRAMry9begvh6ILp9dOBYJwGAsl7eHZmQWTz7UEnm0PkwQ6SYQmsrNpSPOH6ZbayaORPLCYgj8UmEQ/cEHFECLiXbGUBrPYL8oTnTmb9kK4QxZREMhxNZqaSCbgTKZiJaFpkGr6tGEF+b74ERUhytPDcLFdg6btP/pFJpv8ihcZGR6R7IX9AGhkZC4zi7GcDF+/h7Pcu4xPqw7RlPHWbdTtV/0esu/euTocdLoSnhOU+D3h18pSPPrcg2fNqsncI7OydOuRkzpDaMZvLmye5D9n1ASZ72ELbA/wh+8R2Gr6525FoWn2kpqc9EYOcTZcOeJG4bNKlijdcQb9fcoUIJkYGHUqU0zucyMR7+QmRL2tmtcxel4GEaIJX8dJrmLGqeGMTZbgPQmzARZohmhKPaH93JntLXZR7b7Lvak1pyVgmmnZu2CyWIFKfQtsAX3egDBnNeU+4u1qDRHlk3YF9oP6EdcHjmV7foUu8EvENi2IBGVVv75m1HM1XOnMVLDkUUmU9y2VEv4O6nRLvo2xke2+jIeCII/VB0f2Ys1Ce//tleIYkInHFuX+3K2DXODnHFMP7tXrD+LXBi3Xj0Jg7MRZ3zVlO4t6uADB5O5zReobVXQqMjhEnrN9C4OcCGA4qemLzFMpY0aUJMgHSUyeCOqqjmni2BHe1yc8VL624xvza   +       &quot;summaries&quot;: &quot;默认会员等级&quot;,
        &quot;charge_flag&quot;: 1,
        &quot;credit_flag&quot;: 1,
        &quot;credit_price&quot;: 300,
        &quot;member_discount&quot;: 40
      },
      {
        &quot;id&quot;: &quot;1003105&quot;,
        &quot;name&quot;: &quot;黄金会员&quot;,
        &quot;mode&quot;: &quot;2&quot;,
        &quot;num&quot;: &quot;2000000&quot;,
        &quot;title&quot;: &quot;黄金会员尊享9折优惠&quot;,
        &quot;privileges&quot;: [
          &quot;测试权益一&quot;,
          &quot;测试权益二&quot;,
          &quot;测试权益三&quot;
        ],
        &quot;summaries&quot;: [
          &quot;会员等级描述测试&quot;
        ],
        &quot;charge_flag&quot;: &quot;1&quot;,
        &quot;credit_flag&quot;: &quot;0&quot;,
        &quot;credit_price&quot;: &quot;6000&quot;,
        &quot;member_discount&quot;: 100
      }
    ]
  }
}

```

 **返回参数说明** 

| 字段名             |   类型   |    �   ,�明     |         举例 |
|:----- |:----- |:-----|-----                           |
| grades              |  array  |   等级规则    | 详情见【grades等级规则】       |
**grades等级规则**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| id              |  int  |   等级规则id    | 1       |
| name             |  string  |   等级名称    |  普通会员       |
| mode             |  int  |   升级方式【参数废弃，变更为regulars参数】    |  1:购买 2:累计金额  4:累计次数  8:赠送  16:普通会员       |
| num             |  int  |   升级达标量 【参数废弃，变更为regulars参数】   |  6000       |
| title             |  string  |   特权标题    |  普通会员       |
| privileges             |  string  |   特权列表    |  [&quot;测试权益一&quot;, &quot;测试权益二&quot;, &quot;测试权益三&quot;]       |
| summaries             |  string  |   特    权限制说明 【参数废弃】   |  默认会员等级       |
| charge_flag             |  int  |   等级是否开启储值    |  1:开启  0:关闭      |
| credit_flag             |  int  |   等级是否开启积分    |  1:开启  0:关闭       |
| credit_price             |  int  |   获得1积分所需要消费金额（分）    |  300       |
| member_discount             |  int  |   会员价比例(百分比)    |  40       |
| regulars      |  array  |   升级规则设置，包括升级方式和升级达标量   |   详情见【升级规则说明】    |
| order      |  int  |   升级规则排序   |    1   |
**regulars升级规则设置（单位：分）**

| 值     |     说明     |   
|:-----|-----                           |
| 1       |   售卖金额     |
| 2       |   累计消费金额     |
| 3       |   累计消费次数     |
| 4      |  累计充值金额      |
| 5      |  储值余额满金额      |
 **备注** 

- 更多返回错误代码请看错误代码描述


Y���    q  q                                                                                                       ��] 	K�1showdoc	获取交易/储值支付方式
    
**简要描述：** 

- 获取交易/储值支持的支付方式。
注意：支付方式是可以扩展的，不限于现有几种方式

**请求URL：** 
- ` /deal/getpaytype `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | optype | string | 【默认】消费: consume   储值: charge | 字符串 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;1&quot;: &quot;现金支付&quot;,
    &quot;2&quot;: &quot;银行卡支付&quot;,
    &quot;3&quot;: &quot;微信支付&quot;,
    &quot;4&quot;: &quot;支付宝支付&quot;,
  }
}

```

 **返回参数说明** 

类型编号 : 类型名称

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���   /��效，只是提交储值信息，查看储值可能产生的结果
备注：is_diy:true为自定义金额的储值，按照money实收和reward_money赠送进行储值，不自动匹配储值规则

**请求URL：** 
- ` /charge/preview `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
| cno | string | 用户卡号 | 字符串 |  是 |
  | shop_id | int | 门店id | 数字 |  是 |
  | cashier_id | int | 收银员id | 数字 |  是 |
  | money | int | 储值实收金额(单位:分) | 数字 |  是 |
  | reward_money | int | 储值赠送金额(单位:分) | 数字 |  否 |
  | charge_type | int | 储值支付方式 | 数字 1:现金   2:银行卡   5:微信   4:支付宝  |  是 |
  | remark | string | 储值备注 | 字符串 |  否 |
 | is_diy | boolean | 是否为自定义金额储值 | 布尔  true  false[默认] |  否 |
 | recommenderecode | int | 推荐人员工工号 | 数字 |  否 |
  | biz_id | str    ing | 储值业务号，收银方保证全部门店唯一，提交储值需要biz_id | 字符串 32位 |  是 |

 **返回示例**

``` 

```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| cno              |  int  |   卡号   |  1535178031641110       |
| phone              |  int  |   手机号   |  13811239921       |
| charge_total    |  int  |   本次储值金额(单位:分)   |  12000       |
| money              |  int  |   实收金额   |  10000       |
| gift              |  int  |   赠送金额   |  2000       |
| expired |  string  |   储值金额有效期   |         |
| biz_id |  string  |   储值业务号   |         |
| deal_id |  string  |   储值订单流水号   |         |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��-                                                                                                                                    � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ��\ 	%�mshowdoc	交易撤销
    
**简要描述：** 

- 交易成功以后，使用交易业务�   6                                                                                                                                                                                                                                                                      �p� 	+�Jshowdoc	发送验证码eNp1U8Fu00AQve9X7IlDhFXO6QlVIKFWKmro3VJrVUiQCDs54UpxBUogad2ooaRulKYiRBWidgNpU2IT/4x31z71F5j12sZFYg7emZ23M/OedxEGQ4UCs+vh2KCmGfpXd55VKGCEJMzcE9puENti3QvanBGzE9WN6Fs7dAw2NO68NlnYgX8eeBbp9KK6FfoNsUNvmtRwOMAeBL+PyP49DP3Qov05O7sE5D81oWnmQ9NgfsDcDgyQ1UEwbOjM6GRvc2MtmVTCMl6qaYq6pCnl7a3KtoJlFNMSSHr8i3hmDAbs8/XSC8zLEHOPfsrYYh2Ty8/UviaH++BjNnHJoIW5GzpT2juIXTr0oBTmPvHfB94Q60gvSmBcyNgTYbpgXUqyOm+xVa7AV6uqL8s74AhyQl1mvQN+xJyJSdj3cXD7I+7Zc+AwwkDH75LTARvNg0ULuCBZljF6C1QfvKlVqsuKqnLyIijiRw/zmdfaTpoQ6/qqWP+iVEVLIbxobrv2qnr/cGlzZeVJqSQCwO6iXT5NbkqhrpAuFjivb96AYSZ2HGR6p3Fswe0CWGdyS4naXOFE8FTo/xkcxYJLrnXyK+JG4i4y94gO+jhhWKTNQ/LxDLJPHz9bK5LRJJx+Tc4mkLQ6505GDfrzInk+9HRKRpaQI+qehI4TuF/gYsOtZP1WND6Ozq/hr+dT4gUihP4AX5KZxQ==cY��k    4  4                                          �H�X 	1�Eshowdoc	获取门店列表
    
**简要描述：** 

- 获取商家在线门店列表

**请求URL：** 
- ` /shop/list `
  
**请求方式：**
- POST 

**参数：** 
无

 **返回示例**

``` 

```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| shop_id             |  int  |   门店id    |  2000000       |
| shop_name              |  string  |   门店名称    |  西直门店      |
| shop_address              |  string  |   门店地址    |  西直门      |
| shop_longitude              |  float  |  经度     |  111.3212       |
| shop_latitude             |  float  |   纬度    | 40.823  |
| service_start             |  date  |   服务开始时间    |  2015-03-24   |
| service_end             |  date  |   服务结束时间    |  2016-12-24   |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��D    &quot;1&quot;,
            &quot;2&quot;,
            &quot;3&quot;
        ]
    }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| id        |  int  |   当前等级规则    |  1321      |
| name        |  string  |   等级名称    |  至尊黑卡会       |
| privileges             |  string  |   特权列表    |  [&quot;测试权益一&quot;, &quot;测试权益二&quot;, &quot;测试权益三&quot;]       |
| charge_flag             |  int  |   等级是否开启储值    |  1:开启  0:关闭      |
| credit_flag             |  int  |   等级是否开启积分    |  1:开启  0:关闭       |
| old_id        |  int  |   之前等级规则id    |  12323       |
| limit_time        |  date  |   到期时间    |  2017-08-01       |
| charge        |  int  |   升级到该等级消费多少储值    |  1       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��    规则必须设置为售卖方可升级

**请求URL：** 
- ` /grade/edit `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno | string | 要修改的会员卡号 | 字符串 |  是 |
 | grid | int | 要升级到的会员等级规则id | 数值 |  是 |
| sid | int | 门店id 售卖等级的门店id | 数字 |  是 |
| cashier_id | int | 操作收银员id | 数字 |  是 |
 | type | int | 1:购买   2:赠送 | 数值 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result        |  int  |   修改结果 SUCCESS:成功   FAIL:失败    |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��\   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ��R 	=�1showdoc	手工调整会员等级
    
**简要描述：** 

- 手工调整会员等级

**   �    ��撤销交易
撤销交易后，交易使用的储值、积分、券会退回会员账户

**请求URL：** 
- ` /deal/cancel `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | biz_id | string | 交易业务号，收银方保证唯一，交易预览时提交的biz_id | 字符串 |  是 |
| cashier_id | int | 收银员ID | 数字 |  是  | 

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result              |  string  |   交易撤销结果  SUCCESS:成功  FAIL:失败  |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y�¥                                                                                 U  U                                                                           �'� 	1�}Qshowdoc	升级会员等级eNp1VE9vEkEUv8+nmJMHIql6XE+m0cTYpEbsWZqyQRIFXejBSBOobUot20Wh5U8J0ogtUVmo0pbCtnyZndndU7+Cb/bBspo6h503b37v9/7uEAqLBAKWnrGPslzT7HHv2qgFApSQIGXqljU8No0a+1SxOtsgE9ba4r/bALFKbZ4759sZVm/jHfucBw60sWobqLw28my86RyOWKcCSHO4CwCnqsKVfbzBclVbv7IudXPQEUjtO9vM2voASViuxw/6zo+KR2UOVAQgA3hkhbyg6n3ge33BUNKZuj9z7fKgIwxj6m6ISL5/wbQuwgjUwe6e85P1pWcLkyIEaZjORZXliDwnR2IpGiZuuRAmjA3NRQLw6WLoORUcTFvne14VaZqyTpnrp6yggkytkxFr7FAh2t0+r+y6Im8aQEWFDHGaRpOmSVoKwgKVNNtQF6Rp3EArHKzEE/BNppRYPAoCdMEc67x0AV3A5jH1kGnnGIr188gc/HKdVrpoH1ViEdhi8RRae+X3CLCiWEgXCxmyjDFjAfc+DqfcZsMyKPz9ADJPjwSdsp9gZTn5MiYrL3w8vKial3VeOnOKZxDFjYYgpd69kT2bu5Ld75gXPSjOPck+bTqZ7A3xEgpdHJfYQcNqDc2rHWghCYfDlLyHDt96u5pI3ZcVZSURkfEg0Tu3/Tevk9HpBe6LT3CfoRQ5OYUIUp969VXqb+PQ0vz8w1AID4BdI2siGl+UOFQ4Me5c+cfKvyBDb8bcgzdm07O7zMEVZO1NWZD+s3sD9r8lOoap+DyLDrhOJvM3KvJGnU6yk3iuwD5+gdtHDx4vSKx1Yve/TQwnEI9bJI5PzeQpgoeAtWpYC6dUtbtdc/TVambhT7TqO34NPmKEkD+fklK8Y��S     2                    ��Q 	1�Cshowdoc	升级会员等级    
**简要描述：** 

- 升级会员等级
备注：用户所在等级和要升级的等级，必须存在于升降级规则设置中，只允许升级到更高等级，不允许降级和同级调整，售卖等级，升级   4�:�P 	1�+	showdoc	查看等级设置
    
**简要描述：** 

- 查看商家用户等级规则设置
- 【注意】如需要本地缓存等级规则，不要写死，要定时同步等级规则数据，保障数据调用

**请求URL：** 
- ` /grade/rule `
  
**请求方式：**
- POST 

**参数：** 

无

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;grades&quot;: [
      {
        &quot;id&quot;: &quot;0&quot;,
        &quot;name&quot;: &quot;普通会员&quot;,
        &quot;mode&quot;: 16,
        &quot;num&quot;: 0,
        &quot;title&quot;: &quot;普通会员&quot;,
        &quot;privileges&quot;: &quot;&quot;,
    *                           �]�O 	%�{showdoc	开电子卡
    
**简要描述：** 

- 开电子卡（备注：此接口需要申请开通）

**请求URL：** 
- ` /user/openwxcard `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | openid | string | 微信的用户openid | 字符串 |  是 |
 | shop_id | int | 开卡对应的微生活门店id | 数字 |  是 |
 | phone  | string | 会员手机号 | 字符串 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result        |  string  |   开卡结果   SUCCESS:成功   FAIL:失败    |  SUCCESS      |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���    e&quot;: &quot;收银员cch&quot;
    },
    {
      &quot;cashier_id&quot;: &quot;1159296877&quot;,
      &quot;shop_id&quot;: &quot;4101315464&quot;,
      &quot;username&quot;: &quot;baihongyeaa&quot;,
      &quot;nickname&quot;: &quot;baihongyeaa&quot;
    },
    {
      &quot;cashier_id&quot;: &quot;1218054703&quot;,
      &quot;shop_id&quot;: &quot;4101315464&quot;,
      &quot;username&quot;: &quot;cch&quot;,
      &quot;nickname&quot;: &quot;cch&quot;
    }
  ]
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| cashier_id              |  int  |   收银员id    |  1526932490281211       |
| shop_id             |  int  |   门店id    |  1265693       |
| username             |  string  |   收银员用户名    |  收银员cch       |
| nickname             |  string  |   收银员名称    |  收银员cch       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��X    ��在提交以后才会真实生效

**请求URL：** 
- ` /charge/commit `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
  | biz_id | string | 储值业务号，收银方保证唯一，提交储值需要biz_id | 字符串 |  是 |
   | is_diy | boolean | 是否为自定义金额储值 | 布尔  true  false[默认] |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;deal_id&quot;: 1535191762408709
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| deal_id              |  string  |   储值交易id    |  1535178031641110       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��e                                                                                                                     � � ��                                                                                                                                                                                                                                                                                                                                                                                                              �-�Z 	%�showdoc	交易提交
    
**简要描述：** 

- 预消费提交，预览过的交易只有在提交以后才会真实生效

**请求URL：** 
- ` /deal/commit `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:   ]   � 	%�e	showdoc	交易预览
    
**简要描述：** 

- 预消费，预览的交易并未真正生效，只是提交消费信息，查看交易可能产生的结果
备注：券佯}�Y 	%�=	showdoc	交易预览    
**简要描述：** 

- 预消费，预览的交易并未真正�   �   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �`�N 	a�Eshowdoc	获取当前登录微信用户账户信息
    
**简要描述：** 

- 获取当前登录微信用户账户信息，通过wl_token获取微信用户账户信息
- wl_token 获取步骤
1. 商家提供一个用于接收wl_token值的URL，给代理商或城市经理（例如：http://domain/getToken）
2. 代理商或城市经理会帮�   u    �  �                                                                                                                                                      �\�M 	=�ashowdoc	重置会员交易密码
    
**简要描述：** 

- 重置会员的交易密码

**请求URL：** 
- ` /user/resettranssecret `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:----- |:-----|-----   |
 | cno | string | 要重置的会员卡号 | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:-----  |:-----|-----                           |
| result        |  string  |   重置结果 SUCCESS:成功   FAIL:失败    |  SUCCESS    |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


	Y���    
**请求URL：** 
- ` /user/edittranssecret `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:----- |:-----|-----   |
 | cno | string | 要修改的会员卡号 | 字符串 |  是 |
 | original_secret | string | 原密码 6位数字 | 字符串  |  是 |
 | new_secret | string | 新密码 6位数字| 字符串  |  是 |
 | new_secret_again | string | 新密码确认 6位数字 | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:-----|:-----|-----                           |
| result        |  string  |   修改结果 SUCCESS:成功   FAIL:失败    |  SUCCESS     |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


Y��1                                                � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �~� 	1�-Cshowdoc	接口调用流程eNqNVG1P21YU/u5f4U/94IVgO28QlA8VqyZ1o9kW+LBV1TCxk3nKW2OnXUWQElom0gbC1FA6lq4gKEVV88LKINC0/S+t77X51L/QYx8HiFS2RYp87nOfc849zzn3chxdfkZqW1b7kO7Nk0aHPCl97K1zHDPE/qzrOS08PCzlVK8UV26rqZQ3o+jM5S/Qh1ZKtFFBm9Re0HqbVsvfRmOTGMxrv   �    求URL：** 
- ` /user/edit `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:-----|:----- |-----   |
 | cno | string | 要修改的会员卡号 | 字符串 |  是 |
 | gender | int | 性别 | 1:男  2:女 |  否 |
 | username | string | 王小二 | 字符串 |  否|
 | birth | date | 生日  | 日期 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:----- |:-----|-----                           |
| result        |  string  |   修改结果 SUCCESS:成功   FAIL:失败    |  SUCCESS      |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


Y���                                                                                                                                         ;  ;                                                 �A�J 	+�=showdoc	发送验证码    
**简要描述：** 

- 给指定用户发送验证码，微信会员通过微信消息，实体卡会员通过手机短信发送验证码
- 验证码用于绑定实体卡

**请求URL：** 
- ` /user/sendcode `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:-----|:----- |-----   |
 | cno | string | 绑定用户的卡号 | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:----- |:-----|-----                           |
| result        |  string  |   发送结果 SUCCESS:成功   FAIL:失败    |  SUCCESS      |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


Y���   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ��m  K�Kfrom_api	wedatas_user_card_category_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | ccid | bigint(20) | NO |  | 卡类别ID | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | all_user | int(10) | NO |  | 总会员量 | 
 | demotion_num | int(4) | YES | 0 |  | 
 | cancel_card_member_total | int(10) | YES | 0 |  | 
cY���     | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | new_user_weixin | int(10) | NO |  | 新增微信关注会员 | 
 | new_unregistered_user | int(10) | NO |  | 新增取消关注会员量 | 
 | new_user_actual | int(10) | NO |  | 新增实体卡会员 | 
 | all_user | int(10) | NO |  | 累计会员量 | 
 | new_user_consomer | int(10) | NO |  | 新增消费会员量 | 
 | new_user_charger | int(10) | NO |  | 新增储值会员量 | 
 | all_user_consomer | int(10) | NO |  | 累计消费会员量 | 
 | all_user_charger | int(10) | NO |  | 累计储值会员量 | 
 | all_unregistered_user | int(10) | NO |  | 取消关注会员总量 | 
 | new_cancel_user_actual | int(25) | YES | 0 | 实体卡取消关注数量 | 
 | new_first_user_weixin | int(25) | YES | 0 | 微信会员首次关注数量 | 
 | new_first_unregistered_user | int(25) | YES | 0 | 微信会员首次取消关注数量 | 
cY���   
 = �?�~�] � � =                                 ^ 	�)5f3c8c2be2f4b0820ede56163c574c59499cc8ef29c064d553e478c6904dfd5aZ)~61.148.196.162Y��~^
 	�)61de227a8a1a203aa58716376ef42ca6251841e3653e4866e3c6e9a7963287faZ361.148.196.162Y�x3^	 	�)3b7338b4d3cec61ef4b11470e0a8b545586f127ff0d09c46375db371a890a4daZ�61.148.196.162Y�h�^ 	�)b6794cd50f86e0307f7037c122587c06e64f53427c9d529a8eb1f1dabdf81dcdZ"h61.148.196.162Y�{h^ 	�)de196a70772555f9c081490df32aa9acc13c4e8e3ea361a0128293e9d407cde7Z�61.148.196.162Y�]�_ �)b71b6d04e900c2bbad2338c88f9aa77deb3343fa6d7d695271861bf299badfd5Z��61.148.196.162Y�S�^ 	�)4af690393248bd59a8fb71fada9c93d5eaefe82bed4c51992db408e6a4680bbcZ��61.148.196.162Y�K�_ �)7079967149c6b42b79e213bfbbd633514902be4ac8b93ab54b8e48f57c2a0571Z��61.148.196.162Y�K�_ �)ee3e334b94c0a08e8997a3244229963e318961dd9431fd1b4d6330e90a0c1ca6Z��61.148.196.162Y�7�^ 	�)7fb89781fbb24146bf43f77856777b2b60e058b14f64a77c1af6a328b90ca8f8Z�,61.148.196.162Y�6,    S X S                                                                       ��q  A�%from_api	wedatas_welife_qrcode_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ftime | bigint(20) | YES |  |  | 
 | bid | bigint(20) | YES |  |  | 
 | qcid | bigint(20) | YES |  |  | 
 | sid | bigint(20) | YES |  |  | 
 | qrid | text | YES |  |  | 
 | new_users | bigint(20) | YES |  |  | 
 | all_cancel_users | bigint(20) | YES |  |  | 
 | all_users | bigint(20) | YES |  |  | 
 | send_coupon | bigint(20) | YES |  |  | 
 | used_coupon | bigint(20) | YES |  |  | 
 | cancel_used_coupon | bigint(20) | YES |  |  | 
 | consum_amount | bigint(20) | YES |  |  | 
 | cancel_consum_amount | bigint(20) | YES |  |  | 
 | coupon_amount | bigint(20) | YES |  |  | 
 | cancel_coupon_amount | bigint(20) | YES |  |  | 
cY�����p  /�mfrom_api	wedatas_user_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime   D> Z�    ����������� &,28\bhntz����������������������
"(.4:@FLRX^djpv|��������������������������FLRX^djpv|���������������������       �Y   �[   n�\   Ձ]   ~�^   ہ`   z�b   y�c   ��d   �e   !�i   ��l   C�m   B�n   M�o   F�q   W�s   V�t   U�u   T�v   X�x   O�y   P�{   Ł|   �}   Q�~   h�   ܂    ݂   i�   ��   �Y   �[   n�\   Ձ]   ~�^   ہ`   z�b   y�c   ��d   �e   !�i   ��l   C�m   B�n   M�o   F�q   W�s   V�t   U�u   T�v   �xJ �wP �{   �|\ �}   O�w   Q�   ܂    ݂   i�   ��   ��   ��   ��   Ă	   ��
   �   �   ��   ��   �   ɂ   �   �   �   ��   Ђ   ��   ς   ͂   ��    ��!   ւ"   ��$   ��%   ��&   ��'   �(   ��)   �*   ��+   ��,   ��-   ��.   q�0   ��1   ��2   ��3   ��5   ��6   ��7   ��8   ��9   ��;   v�=   ��>   ;�@   k�B   @�E   >�F   u�G   =�H   <�I   :�K   9�L   8�M   g�O   6�P   5�Q   4�S   ��T   ��U   �V   ��W   ��X   P��情

**请求URL：** 
- ` /charge/view `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | charge_id | int | 储值流水号 | string |  是 |

 **返回示例**

``` 
{
    &quot;errcode&quot;: 0,
    &quot;errmsg&quot;: &quot;OK&quot;,
    &quot;res&quot;: {
        &quot;charge_id&quot;: &quot;1564554998581439&quot;,
        &quot;cno&quot;: &quot;1265855&quot;,
        &quot;sid&quot;: &quot;4101315464&quot;,
        &quot;total_fee&quot;: &quot;5000&quot;,
        &quot;fee&quot;: &quot;5000&quot;,
        &quot;award_fee&quot;: 0,
        &quot;type&quot;: &quot;6&quot;,
        &quot;pay_time&quot;: &quot;2017-04-13 17:31:58&quot;,
        &quot;pay_type&quot;: &quot;1&quot;,
        &quot;has_receipt&quot;: &quot;2&quot;,
        &quot;cashier_id&quot;: &quot;1218054703&quot;,
        &quot;remark&quot;: &quot;&quot;,
        &quot;grade&quot;: &quot;1003299&quot;,
        &quot;grade_name&quot;: &    5  5                                           �G�g 	�]	showdoc	发券
    
**简要描述：** 

- 给用户发送代金券或礼品券

**请求URL：** 
- ` /coupon/send `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno  | int | 会员卡号 | 数字 |  是 |
 | template_id | int | 券模板id | 数字 |  是 |
 | amount | int | 发送张数，小于50 | 数字 |  是 |
 | biz_id | string | 兑换业务号 | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;biz_id&quot;: &quot;ADB3fdfGdh&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| biz_id             |  string  |   兑换业务号    |  1265693       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���    | tinyint(3) unsigned | NO | 0 | 是否是阴历生日 | 
 | uPayPassword | varchar(32) | NO |  |  | 
 | uCustomFields | text | NO |  | 自定义项 | 
 | uLastRegistered | datetime | NO | 0000-00-00 00:00:00 | 最后一次关注时间 | 
 | uLock | tinyint(3) unsigned | YES | 0 | 1锁定 0未锁 | 
 | ccid | int(10) unsigned | NO | 0 | 关联卡种类 | 
 | uCustomChargePay | tinyint(3) unsigned | NO | 0 | 收银员自定义消费使用储值验证方式 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | uSetBirthDayTime | datetime | NO | 0000-00-00 00:00:00 | 用户最后一次设置生日的时间 | 
 | uPhonePrefix | int(10) unsigned | NO | 0 | 用户手机号区号 | 
 | uFromOtherCNo | varchar(256) | NO |  | 外卡导入-旧系统卡号 | 
 | uFromOtherCMoney | int(11) | NO | 0 | 外卡导入-旧系统储值余额（单位：分） | 
 | uFromOtherCCredit | int(11) | NO | 0 | 外卡导入-旧系统积分余额 | 
 | uAlipayid | varchar(64) | NO |  | 对应支付宝id | 
cY��$    archar(64) | NO |  | 卡类别名称 | 
 | ccCardType | tinyint(3) unsigned | NO |  | 卡面类别，1：系统自带，2：自定义。 | 
 | ccCardFace | text | NO |  | 卡面定义。 | 
 | ccCardStyle | tinyint(3) unsigned | NO |  | 卡面所选样式 | 
 | ccChargeFlag | tinyint(1) unsigned | NO | 0 | 储值开关 | 
 | ccCreditFlag | tinyint(1) unsigned | NO | 0 | 积分开关 | 
 | ccCreditPrice | int(10) unsigned | NO | 0 | 当前卡类型累计1积分需要消息的金额（元）。 | 
 | ccMemberDiscount | tinyint(3) unsigned | NO |  | 会员价折扣。 | 
 | ccMemberDiscountSids | text | NO |  | 会员价折扣适用门店。 | 
 | ccPrivileges | varchar(1024) | NO |  | 会员特权 | 
 | ccCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | ccSelfPayDiscount | tinyint(3) unsigned | NO | 0 | 自助买单折扣 | 
cY���   J | openid | varchar(32) | NO |  | openid | 
 | uRegistered | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uUnRegistered | datetime | NO | 0000-00-00 00:00:00 | ȡ | 
 | uUserInfoStatus | tinyint(3) unsigned | NO | 0 |  | 
 | uConsumeNum | int(11) unsigned | YES | 0 |  | 
 | uConsumeAmount | int(11) unsigned | NO | 0 |  | 
 | uCardStatus | tinyint(3) unsigned | NO | 0 |  | 
 | uActivityStatus | int(11) unsigned | NO | 0 |  | 
 | uCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | uStatus | tinyint(3) unsigned | NO | 0 | ״̬ 1 | 
 | uActualNo | varchar(64) | NO |  |  | 
 | uWeixinCardFlag | varchar(64) | NO |  | 卡包code | 
 | uCrmNo | varchar(40) | NO |  | 对接商家卡号 | 
 | uCrmUid | varchar(32) | NO |  | 通卡原始wxuin | 
 | uUserInfoCompleted | datetime | NO | 0000-00-00 00:00:00 | 用户首次完善资料时间 | 
 | uWXNickname | varchar(128) | NO |  |  | 
 | uIsLunarBirth     [  [                                                                                 �!�o  3�sfrom_api	wedatas_user_stat_t|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | new_user_weixin | int(10) | NO |  | 新增微信关注会员 | 
 | new_unregistered_user | int(10) | NO |  | 新增取消关注会员量 | 
 | new_user_actual | int(10) | NO |  | 新增实体卡会员 | 
 | all_user | int(10) | NO |  | 累计会员量 | 
 | new_user_consomer | int(10) | NO |  | 新增消费会员量 | 
 | new_user_charger | int(10) | NO |  | 新增储值会员量 | 
 | all_user_consomer | int(10) | NO |  | 累计消费会员量 | 
 | all_user_charger | int(10) | NO |  | 累计储值会员量 | 
 | all_unregistered_user | int(10) | NO |  | 取消关注会员总量 | 
cY���   ^�   n��������� &,28>DJPV\bhntz����������������������
"(.4:@FLRX^djpv|���������������������@FLRX^djpv|���������������������       b�   }�   �   ك   ˃   e�	   w�   ��   a�   ��   ��   �  �  �  �  �  	�  �  �  �  �  �  �  �  �   "�!  #�"  $�#  %�%  '�&  (�'  )�(   2�Z   1�[   0�\   ��_   .�`   ��c   ,�e   )�f   ��g   (�h   '�i   ̂j   ��k    �l   ��m   ��n   �o   x�q   Âs   H�t   m�u   �v   r�w   j�x   ^�y   тz   ��{   }   ΂   ڃ    �   b�   }�   �   ك   ˃   e�	   w�   ��   a�   ��   ��   �  �  �  �  �  	�  �  �  �  �  �  �  �  �   "�!  #�"  $�#  %�%  '�&  (�'  )�(  +�)  ,�*  -�+  /�,  0�-  1�.  2�/  4�0  5�1  6�3  9�5  ;�7  =�8  >�9  ?�:  @�;  D�<  H�=  I�>  J�@  M�D  R�G  V�J  \�M  `�N  b�O  d�P  f�Q  h�R  j�S  l�T   � ��     �d�w  %�from_api	welife_shops|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | sid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | cid | int(10) unsigned | NO | 0 |  | 
 | areaId | int(10) unsigned | NO | 0 |  | 
 | sName | varchar(128) | NO |  |  | 
 | s   S  {  ;�from_apidpods_welife_users_hour|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO | 0 | primary key | 
 | uid | bigint(20) unsigned | NO | 0 |  | 
 | uType | tinyint(3) unsigned | NO �d�w  %�from_api	welife_shops|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | sid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | cid | int(10) unsigned | NO | 0 |  | 
 | areaId | int(10) unsigned | NO | 0 |  | 
 | sName | varchar(128) | NO |  |  | 
 | s   S   `quot;第三等级&quot;,
        &quot;award_coupon&quot;: [
            {
                &quot;cName&quot;: &quot;29元cch储值代金券&quot;,
                &quot;couponId&quot;: &quot;2116383&quot;,
                &quot;cAmount&quot;: &quot;29&quot;,
                &quot;number&quot;: &quot;1&quot;
            }
        ],
        &quot;biz_id&quot;: &quot;3025&quot;,
        &quot;status&quot;: &quot;1&quot;
    }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| charge_id              |  string  |   储值流水   |  1535178031641110       |
| cno              |  int  |   储值用户卡号   |  1265693       |
| sid              |  int  |   储值门店id   |   3196764329      |
| total_fee    |  int  |   充值金额(单位:分)  |   12000      |
| fee              |  int  |   实收金额(单位:分)   |   10000      |
| award_fee     |  int  |   奖励金额(单位:分)    |      t t                                                                                                                                                                                                                                                                                                                                                                          � �  O�from_apidprpt_welife_trade_consume_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ftime | int(11) | NO |  | ʱ | 
 | bid | bigint(20) | NO |  |  | 
 | tcid | bigint(60) | NO |  | ԭʼ | 
 | tcrelateid | bigint(60) | YES |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | sname | varchar(100) | YES |  |  | 
 | uno | bigint(30) | YES |  |  | 
 | uphone | bigint(11) | YES |  |  | 
 | tcpaytype | bigint(11) | YES |  | ֧ | 
 | tctype | bigint(11) | YES |  |  | 
 | tchandle | bigint(11) | YES |  |  | 
 | mname | varchar(100) | YES |  |  | 
 | tclcreated | varchar(100) | YES |  |  | 
 | tct   �    平台门店对应的位置ID | 
 | sCrmSid | varchar(64) | NO |  | 对接门店id | 
 | sBrandName | varchar(128) | NO |  | 门店品牌名称 | 
 | sType | varchar(64) | NO |  | 类型 | 
 | sNearbyAddress | varchar(512) | NO |  | 附近地址 | 
 | sBusinessHours | varchar(512) | NO |  | 营业时间 | 
 | sBusInfo | varchar(512) | NO |  | 公交信息 | 
 | sPrintWidth | int(3) | NO | 0 |  | 
 | SDpShopId | varchar(32) | NO |  |  | 
 | sAuditLogs | text | NO |  | 门店审核日志 | 
 | sTradeType | varchar(32) | NO |  | 门店行业 | 
 | sTradeSubType | varchar(32) | NO |  | 门店子行业 | 
 | reid | int(11) unsigned | YES | 0 |  | 
 | sIsPrivateUserCard | tinyint(3) unsigned | NO | 0 | 是否标识该门店的卡只限本店使用 | 
 | sIsPrintPlug | tinyint(3) unsigned | NO | 0 | 是否使用插件打印 | 
 | sPublicPraiseId | varchar(32) | YES |  | 口碑ID | 
 | sPrintNumber | int(3) | NO | 1 | 插件打印张数 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY���   RSubName | varchar(128) | NO |  |  | 
 | sAddress | varchar(512) | NO |  |  | 
 | sOralAddress | varchar(512) | NO |  |  | 
 | sPhones | varchar(512) | NO |  |  | 
 | sLongitude | varchar(32) | NO |  |  | 
 | sLatitude | varchar(32) | NO |  | γ | 
 | sDistrictId | int(10) unsigned | NO | 0 |  | 
 | sCommerceCircleId | int(10) unsigned | NO | 0 |  | 
 | sQrcode | varchar(32) | NO |  |  | 
 | sMark | varchar(512) | NO |  |  | 
 | sRemark | varchar(512) | NO |  |  | 
 | sBusinessState | tinyint(4) | NO |  | Ӫҵ״̬ | 
 | sBusinessArea | decimal(11,2) | NO |  | Ӫҵ | 
 | sServiceStart | date | NO | 0000-00-00 |  | 
 | sServiceEnd | date | NO | 0000-00-00 |  | 
 | sCreator | int(10) unsigned | NO |  |  | 
 | sRank | int(10) unsigned | NO | 0 |  | 
 | sCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | sUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | sDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | sStatus | tinyint(3) unsigned | NO | 0 |  | 
 | sLocationId | int(11) unsigned | NO | 0 | mp    �  �                                                                                                                                    �n�v  )�from_api	welife_qrcodes|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | qrid | varchar(32) | NO |  |  | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | sid | int(10) unsigned | NO | 0 |  | 
 | aid | varchar(32) | NO |  |  | 
 | cid | int(10) unsigned | NO | 0 |  | 
 | qChannelType | int(10) unsigned | NO | 0 |  | 
 | qUse | varchar(10) | NO |  |  | 
 | qUrl | varchar(1024) | NO |  |  | 
 | qDesc | varchar(1024) | NO |  |  | 
 | qCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | qUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | qDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | qStatus | tinyint(3) unsigned | NO | 0 |  | 
 | qSceneId | int(11) unsigned | NO | 0 | mp scene value | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY���    �  �                                                                                                                                                                                                                    ��u  9�gfrom_api	welife_qrcode_channels|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | qcid | int(10) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO | 0 | 渠道所属商户ID。 | 
 | qcName | varchar(24) | NO |  | 渠道名称。 | 
 | qcCreated | datetime | NO | 0000-00-00 00:00:00 | 渠道名创建时间。 | 
 | qcUpdated | datetime | NO | 0000-00-00 00:00:00 | 渠道名最近一次更新时间。 | 
 | qcDeleted | datetime | NO | 0000-00-00 00:00:00 | 渠道名删除时间。 | 
 | qcStatus | tinyint(3) unsigned | NO | 1 | 记录状态。 | 
 | qcSystemStatus | tinyint(3) | NO | 0 | 是否系统生成（用于判断系统生成的不可删除） | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY���    J  J                                                                �2�t  +�from_api	welife_managers|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | mid | int(20) unsigned | NO |  |  | 
 | bid | int(20) unsigned | NO |  |  | 
 | sid | int(20) unsigned | NO |  |  | 
 | mName | varchar(20) | NO |  |  | 
 | mPhone | char(11) | NO |  |  | 
 | mRoleId | tinyint(3) | NO |  |  | 
 | mShops | text | NO |  |  | 
 | mStatus | tinyint(3) | NO |  |  | 
 | mCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | mCashierPermission | int(11) | NO |  |  | 
 | mPassword | varchar(32) | NO |  | 密码md5 | 
 | mAliasName | varchar(24) | NO |  | 别名默认手机号 | 
 | mIsRegion | tinyint(1) unsigned | NO | 0 | 是否为区域店长。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY���    D                                                                                                                                                                                                                                                                �,�s  9�from_api	welife_card_categories|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ccid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | ccIsCommon | tinyint(1) unsigned | NO | 0 | 是否普通会员 1 是 0不是 | 
 | ccName | v   K�0�r  ;�	from_api	wedatas_welife_user_mvm|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bid | bigint(20) | NO |  | 商户id | 
 | uid | bigint(20) | NO |  | uid | 
 | uname | varchar(100) | YES |  | 姓名 | 
 | sex | int(3) | YES |  | 性别 | 
 | uphone | bigint(20) | YES |  | 电话 | 
 | birthday | varchar(100) | YES |  | 生日 | 
 | register_sid | bigint(20) | YES |  | 注册门店 |    \   � �.                                                      �  ?�ifrom_apidpods_welife_coupon2users|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO | 0 | primary key | 
 | c2uKey | varchar(32) | NO |  | key | 
 | c2uId | bigint(20) unsigned | NO |  |  | 
 | uid | bigint(64) | NO |  |  | 
 | bid | int(10) unsi�j�|  9�from_apidpods_welife_users_day|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO | 0 | primary key | 
 | uid | bigint(20) unsigned | NO | 0 |  | 
 | uType | tinyint(3) unsigned | NO | 0 |  | 
 | uName | varchar(128) | NO |  |  | 
 | uPhone | char(11) | NO |  |  | 
 | uAvatar | varchar(1028) | NO |  | ͷ | 
 | uGender | tinyint(3) unsigned | NO | 0 |  | 
 | uBirthDay | char(10) | NO |  |  | 
 | uCid | int(11) unsigned | NO | 0 |  | 
 | bid | int(11) unsigned | NO | 0 |  | 
 | qrid | varchar(32) | NO |  | ɨ | 
 | uNo | varchar(64) | NO |  |  | 
   Y   [ | openid | varchar(32) | NO |  | openid | 
 | uRegistered | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uUnRegistered | datetime | NO | 0000-00-00 00:00:00 | ȡ | 
 | uUserInfoStatus | tinyint(3) unsigned | NO | 0 |  | 
 | uConsumeNum | int(11) unsigned | YES | 0 |  | 
 | uConsumeAmount | int(11) unsigned | NO | 0 |  | 
 | uCardStatus | tinyint(3) unsigned | NO | 0 |  | 
 | uActivityStatus | int(11) unsigned | NO | 0 |  | 
 | uCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | uStatus | tinyint(3) unsigned | NO | 0 | ״̬ 1 | 
 | uActualNo | varchar(64) | NO |  |  | 
 | uWeixinCardFlag | varchar(64) | NO |  | 卡包code | 
 | uCrmNo | varchar(40) | NO |  | 对接商家卡号 | 
 | uCrmUid | varchar(32) | NO |  | 通卡原始wxuin | 
 | uUserInfoCompleted | datetime | NO | 0000-00-00 00:00:00 | 用户首次完善资料时间 | 
 | uWXNickname | varchar(128) | NO |  |  | 
 | uIsLunarBirth        �   �   }   �   Y   [   X   �   L   J   �   �   h   C   �   M   F   D   W   \   K   V   U   T   �   O   S   R   �   �   �   �   �   t   �   �   Q   �   �   �   �   �   G   N   p   o   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �  �  �  �  �  �  *  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �  �     �     �  �  �  �  �  �  �  �  �  �  �  �  �  �  J  �  �  �  �  �  �  ~  �  |  }  �  z  y  �  w  x  s  u  v  t  q  r  p  o  m  n  k  l  i  {  g  j  e  f  c  d  b  a  _  ^  `  h  Y  ]  [  Z  X  -  \  W  U  S  V  T  Q  R  O  K  N  L�销建券商ID | 
cY��$    | tinyint(3) unsigned | NO | 0 | 是否是阴历生日 | 
 | uPayPassword | varchar(32) | NO |  |  | 
 | uCustomFields | text | NO |  | 自定义项 | 
 | uLastRegistered | datetime | NO | 0000-00-00 00:00:00 | 最后一次关注时间 | 
 | uLock | tinyint(3) unsigned | YES | 0 | 1锁定 0未锁 | 
 | ccid | int(10) unsigned | NO | 0 | 关联卡种类 | 
 | uCustomChargePay | tinyint(3) unsigned | NO | 0 | 收银员自定义消费使用储值验证方式 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | uSetBirthDayTime | datetime | NO | 0000-00-00 00:00:00 | 用户最后一次设置生日的时间 | 
 | uPhonePrefix | int(10) unsigned | NO | 0 | 用户手机号区号 | 
 | uFromOtherCNo | varchar(256) | NO |  | 外卡导入-旧系统卡号 | 
 | uFromOtherCMoney | int(11) | NO | 0 | 外卡导入-旧系统储值余额（单位：分） | 
 | uFromOtherCCredit | int(11) | NO | 0 | 外卡导入-旧系统积分余额 | 
 | uAlipayid | varchar(64) | NO |  | 对应支付宝id | 
cY��$    
 | 7dtotalamount | bigint(20) | NO |  | 最近一周消费总额 | 
 | 30dtotalamount | bigint(20) | NO |  | 最近一月消费总额 | 
 | 365dtotalamount | bigint(20) | NO |  | 最近一年消费总额 | 
 | alltotalamount | bigint(20) | NO |  | 历史消费总额 | 
 | 7dconsumepv | bigint(20) | NO |  | 最近一周消费笔数 | 
 | 30dconsumepv | bigint(20) | NO |  | 最近一月消费笔数 | 
 | 365dconsumepv | bigint(20) | NO |  | 最近一年消费笔数 | 
 | allconsumepv | bigint(20) | NO |  | 历史消费笔数 | 
 | 7dincome | bigint(20) | NO |  | 最近一周充值总额 | 
 | 30dincome | bigint(20) | NO |  | 最近一月充值总额 | 
 | 365dincome | bigint(20) | NO |  | 最近一年充值总额 | 
 | allincome | bigint(20) | NO |  | 历史充值总额 | 
 | source_type | tinyint(3) | NO |  |  | 
 | source_qrid | varchar(256) | NO |  |  | 
 | type | int(11) | NO |  | 数据类型 | 
 | lastconsumeday | bigint(20) unsigned | NO | 0 | 距离最后一次消费天数,0为没有消费 | 
cY���    ----- |-----   |
 | biz_id | string | 交易业务号，收银方保证唯一，交易预览时提交的biz_id | 字符串 |  是 |
| verify_code | string | 如果使用储值，根据交易预览接口verify_sms/verify_password返回值，需要传短信验证码或交易密码 | 数字 |  否  | 

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;deal_id&quot;: 1535191762408708,
	&quot;stored_pay&quot; : 100,
	&quot;stored_sale_pay&quot; : 100
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| deal_id              |  string  |   交易id    |  1535178031641110       |
| stored_pay     |  int  |   使用储值支付金额(单位:分)    |   2000      |
| stored_sale_pay     |  int  |   使用实际储值支付金额(单位:分)    |   2000      |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��[    i  � i                                                                                             �{�d 	%�9	showdoc	积分换礼
    
**简要描述：** 

- 使用积分兑换礼品

**请求URL：   ���c 	I�Eshowdoc	查看门店储值规则设置
    
**简要描述：** 

- 查看商家门店储值规则设置
【注意】如需要本地缓存储值规则，不要写死，要定时同步储值规则数据，保障数据调用

**请求URL：** 
- ` /charge/rule `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
| shop_id       |  int  |   门店id    |   12334212     |

 **返回示例**

``` 
{
    &quot;errcode&quot;: 0,
    &quot;errmsg&quot;: &quot;OK&quot;,
    &quot;res&quot;: {
        &quot;expired&quot;: &quot;2018-08-02 23:59:59&quot;,
        &quot;content&quot;: [
            {
                &quot;price&quot;: &quot;1&quot;,
                &quot;money&quot;: 0,
            �          $   #   "   #   $��方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	     2000      |
| award_coupons   |  array  |   奖励券   |   详情见【奖励券】      |
| type              |  int  |   交易类型   |   1:储值   6:撤销储值   7:被撤销储值   8:手工调整减少储值      |
| pay_time       |  date  |   交易时间   |         |
| pay_type      |  int  |   储值支付类型  |  1:现金  2:银行卡   3:微信  4:支付宝  5:店内微信支付  6:手工调整   |
| has_receipt    |  int  |   是否开票   |   1:开票    2:未开票    0:未开票      |
| cashier_id   |  int  |   操作人Id   |         |
| remark     |  string  |   备注   |         |
| grade     |  int  |   用户等级id   |         |
| grade_name     |  string  |   用户等级名称   |         |
| biz_id     |  string  |   第三方业务号   |         |
| status     |  int  |   储值状态  1：成功储值  2：预储值   |         |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���                                                                     bror_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| deal_id              |  string  |   消费流水   |  1535178031641110       |
| cno              |  int  |   消费用户卡号   |  1265693       |
| sid              |  int  |   消费门店id   |   3196764329      |
| total_fee    |  int  |   消费总金额(单位:分)  |   14000      |
| fee              |  int  |   实收金额(单位:分)   |   10000      |
| stored_pay     |  int  |   使用储值支付金额(单位:分)    |   2000      |
| stored_sale_pay     |  int  |   使用实际储值支付金额(单位:分)    |       2000      |
| cash_coupon_pay   |  int  |   使用代金券抵扣金额(单位:分)   |   1000      |
| gift_coupon_pay    |  int  |   使用礼品券抵扣金额(单位:分)   |   1000      |
| credit_num    |  int  |   使用积分数量(单位:个)   |   0       |
| credit_pay    |  int  |   使用积分抵扣金额(单位:分)   |   0      |
| credit_award    |  int  |   奖励积分数量(单位:个)   |   100      |
| type              |  int  |   交易类型   |   1:充值  2:消费 3:撤销消费  4:被撤销消费  5:系统回收  6:撤销充值 7:被撤销充值  8:手工调账减少充值  9:手工调账减少积分  10:积分换礼      |
| pay_type      |  int  |   消费支付类型   |   1:现金   2:银行卡   3:微信  4:支付宝   6:手工调整      |
| pay_time       |  date  |   交易时间   |         |
| remark     |  string  |   备注   |         |
| biz_id    |  int  |   第三方交易号  |         |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��z   � �                                                          � 	1�	showdoc	消费记录列表
    
**简要描述：** 

- 查询指定时间段的消费记录列表

**请求URL：** 
- ` /consume/list `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | begin_date | date | 起始时间 | 日期 |  是 |
 | end_date | date | 截止时间 | 日期 |  是 |
| page | int | 查询第几页| 数字 |  是 |
 | shop_id | int | 门店id | 数字 |  否 |
 | is_allday | int | 是否整天查询| 数字  1：整天  2：指定时间段时分秒[默认] |  否 |
| is_all | boolean | 是否全部流水| boolean  true是   false否[默认，只查接口来源的流水] |  否 |
| is_have_page | boolean | 是否包括分页信息| boolean  true是   false否[默认] |  否 |

 **返回示例**

``` 
{�E�j 	1�A	showdoc	消费记录列表    
**简要描述：** 

- 查询指定时间段的消费记�   �   
 ? �@�� �` � � ?                                   ^ 	�)5e8d887b21cce509fcfd2fdd9c73a483a22dd4290d5c5f76be9d67929ad6f589Z$��61.148.196.162Y�P�^ 	�)17a2a8e3dc5e572ae2ad9786665fd0133424e4910660f03950ac1703787e2f6aZ$�O61.148.196.162Y�;O_ �)17d2f346a7e18ea2caab3c74f95f7dfd79ed29e1178d467de3e76e716f298807Z#��61.148.196.162Y���^ 	�)ae035e7ac9e09f19d39302ff47a02f40ad7038fbecf7363672ec60c8e3ca328eZץ61.148.196.162Y�0�^ 	�)4979051a2debf815ee7210fcfe108c84486e32a4256f659105c0ee69fe7469c3Z�n61.148.196.162Y�0n^ 	�)e142b47033b1e5d80973a8309697481da2ac24ac5c2b3f5ff79478d9107c6e55Zd�61.148.196.162Y���^ 	�)e0826b6eb8d7fdaa398aab5bfe7fe771e2d515df2b7fdccca126454afcd0b664Zd�61.148.196.162Y���^ 	�)05bd384f960a3591a64d820c5403647d0fcc9ddcc96471248e20527d5a1e0a1fZd~61.148.196.162Y��~^ 	�)53cc63d323eda418d7a2b1bf386f2d5252ca56b55e75303f0fc0b9cef088235bZc�61.148.196.162Y���^ 	�)12a2376f6c5babf5d127f56bb584ee703ebbb4e7799b170d607bfecd71b81013Z]�61.148.196.162Y���    �  �                                                                                                                                                                                                                                           ��y  a�from_apiwelife_trade_charge_modify_chargetype_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  | 商户ID | 
 | tcid | bigint(64) unsigned | NO |  | 储值流水号 | 
 | mid | int(20) unsigned | NO |  | 操作员ID | 
 | chargeTypeBefore | tinyint(3) | NO |  | 修改之前的储值方式 | 
 | chargeTypeAfter | tinyint(3) | NO |  | 修改之后的储值方式 | 
 | tcCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tcUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tcDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tcStatus | tinyint(3) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��S    
 | 7dtotalamount | bigint(20) | NO |  | 最近一周消费总额 | 
 | 30dtotalamount | bigint(20) | NO |  | 最近一月消费总额 | 
 | 365dtotalamount | bigint(20) | NO |  | 最近一年消费总额 | 
 | alltotalamount | bigint(20) | NO |  | 历史消费总额 | 
 | 7dconsumepv | bigint(20) | NO |  | 最近一周消费笔数 | 
 | 30dconsumepv | bigint(20) | NO |  | 最近一月消费笔数 | 
 | 365dconsumepv | bigint(20) | NO |  | 最近一年消费笔数 | 
 | allconsumepv | bigint(20) | NO |  | 历史消费笔数 | 
 | 7dincome | bigint(20) | NO |  | 最近一周充值总额 | 
 | 30dincome | bigint(20) | NO |  | 最近一月充值总额 | 
 | 365dincome | bigint(20) | NO |  | 最近一年充值总额 | 
 | allincome | bigint(20) | NO |  | 历史充值总额 | 
 | source_type | tinyint(3) | NO |  |  | 
 | source_qrid | varchar(256) | NO |  |  | 
 | type | int(11) | NO |  | 数据类型 | 
 | lastconsumeday | bigint(20) unsigned | NO | 0 | 距离最后一次消费天数,0为没有消费 | 
cY��   L L                                                                                                                                                                                                                                                                                                                                  �$� 	%�	Yshowdoc	交易预览eNrNWG1TG0cS/q5fMZ9SMQ4VrSSw2av7B1eVVF4+pVJCltZk65DErSSnSEiVBBaIV+EC27wIgzAGhTISDhgLSUY/xjuzq0/5C+mZXq12V8J3ubq7Otmg2Znup3t6nunuxUfg4xsaMqpZ8zjHikWzff57a2doiPh8w6Rz+JhdFczL699bKzA2TwrGzmO9ccS2Nuj1FSudGqV9dvbS2NxnTwsgQ4unbKvGiutcRijq7TLL1WCJ7b8ySsuWbrFmzr3XGyegCIBGc4O9KPno0QK7qIBxWqjr79vGZgXk9OYr8ypvthcQjmWbnYUnncM9NEbzObNaRwGJtg5gFjXNhVNa3dGvF1HaOGrRjRzg4qNeX/0ItM/zTP5K6GyFZlt3jZMaLczfBZy7tPqis51nm4Cy1fWoYKydw/hDNtfZuDLLK3S1DGN6U4UgwACFaXUPx8arCpfcnae7h2jROFuk+Su9fqZfL+v1LEQGVdiza9oq4hgmu+YWfXBuZu0dezP77Vd/sw5tmIyTz2NKZPLzKU15pCo/knGfOGAURCghC6JffvH1N4Sj0OIse2qfO5kh9Ow5q76l66swJsabJn2xTPjQrF2yrTUxZActgCJ8TNt5vXVAZnwz8jB8YErufeHcMJnBL5jlBqKJ   )   t t                                                                                                                                                                                                                                                                                                                                                                          � �  O�from_apidprpt_welife_trade_consume_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ftime | int(11) | NO |  | ʱ | 
 | bid | bigint(20) | NO |  |  | 
 | tcid | bigint(60) | NO |  | ԭʼ | 
 | tcrelateid | bigint(60) | YES |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | sname | varchar(100) | YES |  |  | 
 | uno | bigint(30) | YES |  |  | 
 | uphone | bigint(11) | YES |  |  | 
 | tcpaytype | bigint(11) | YES |  | ֧ | 
 | tctype | bigint(11) | YES |  |  | 
 | tchandle | bigint(11) | YES |  |  | 
 | mname | varchar(100) | YES |  |  | 
 | tclcreated | varchar(100) | YES |  |  | 
 | tct   �   kplate_id&quot;: &quot;2000000&quot;,
      &quot;name&quot;: &quot;10元券&quot;,
      &quot;summary&quot;: &quot;开卡礼送券&quot;,
      &quot;type&quot;: &quot;1&quot;,
      &quot;valid_data&quot;: &quot;relative,1,1&quot;,
      &quot;creator&quot;: &quot;管理员&quot;,
      &quot;shop_list&quot;: &quot;ALL&quot;,
      &quot;products&quot;:[1342, 3243],
      &quot;created&quot;: &quot;2016-06-15&quot;
    },
    {
      &quot;template_id&quot;: &quot;1019302&quot;,
      &quot;name&quot;: &quot;泡芙礼品券&quot;,
      &quot;summary&quot;: &quot;东直门大街的两个门店使用&quot;,
      &quot;type&quot;: &quot;2&quot;,
      &quot;valid_data&quot;: &quot;relative,90,1&quot;,
      &quot;creator&quot;: &quot;管理员&quot;,
      &quot;shop_list&quot;: &quot;4101315464,1786077185&quot;,
      &quot;products&quot;:[1342, 3243],
      &quot;created&quot;: &quot;2016-06-07&quot;
    }
  ]
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |          edit/change `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno  | int | 会员卡号 | 数字 |  是 |
 | cashier_id | int | 收银员id | 数字 |  是 |
| shop_id | int | 门店id | 数字 |  是 |
 | type | int | 积分调整方式  1 增加  2 减少 | 数字 |  是 |
 | credit | int | 调整的积分数量 | 数字 |  是 |
 | remark | string | 调整积分描述 | 字符串 |  是 |
 | biz_id | string | 调整业务号 | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result             |  string  |   调整结果    |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y�ߙ       举例 |
|:----- |:----- |:-----|-----                           |
| template_id    |  int  |   券模板id    |  2000002       |
| name             |  string  |   券名称    |  yiyi礼品券       |
| summary   |  string  |   券描述    |  全部门店充值1000送的券       |
| type             |  int  |   券类型  1:代金券  2:礼品券    |  2       |
| valid_data             |  string  |   券有效期      |  relative,36,1       |
| creator             |  string  |   创建券的管理员名称    |  管理员       |
| shop_list             |  string  |   券适用门店    |  ALL       |
| products     |  json  |  菜品(产品)id列表       |  [1342, 3243]         |
| created             |  date  |   创建日期    |   2016-06-16      |

 **备注** 
 relative, 22, 1
相对有效期：relative
相对有效值：22
相对有效单位：1：天；  2：月； 3：年

absolute,2016-01-01,2016-02-01
绝对有效期：absolute

- 更多返回错误代码请看错误代码描述


Y��"   � ��                                                                                  n 	%�}showdocwelife_users|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primar  � 	7�)showdoc堡垒机使用手册
#####	使用人员需要通过本地的客户端工具登录云盾堡垒机，再访问目标服务器主机进行运维操作。
##### 	注意： 请确认在本地主机已安装支持 SSH 协议的运维工具，如 Xshell、SecureCRT、PuTTY、Ssh 等工具。


本文以 Xshell 工具为例：
1.	打开 Xshell 工具，在连接设置�   � �v�A 	%�/	showdoc	接口规则|    要求      |   描述   |
|:----    |-----   |
|  传输方式  |  为保证交易安全性,采用 HTTPS 传输 |
|  提交方式  |  采用 POST 方法提交 |
|  数据格式  |  提交和返回数据都为 JSON 格式 |
|  字符编码  |  统一采用 UTF-8 字符编码  |
|  签名算法  |  MD5 |
|  接口版本  |  2.0 |

Y���    �  �                                                                                                                       �u�f 	1�showdoc	手工调整积分
    
**简要描述：** 

- 手工增加/减少积分

**请求URL：** 
- ` /cr   j�l�e 	1�showdoc	查看积分设置
    
**简要描述：** 

- 查看商家积分规则设置

**请求URL：** 
- ` /credit/rule `
  
**请求方式：**
- POST 

**参数：** 

无

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;gift&quot;: {
      &quot;price&quot;: &quot;1&quot;,
      &quot;credit&quot;: 1,
      &quot;gift_range&quot;: 2
    },
    &quot;consume&quot;: {
      &quot;credit_consume_openflag&quot;: 1,
      &quot;credit_gift_openflag&quot;: 1,
      &quot;credit_gift_desc&quot;: &quot;积分换礼描述&quot;,
      &quot;credit_gift_rule&quot;: [
        {
          &quot;credit&quot;: 10,
          &quot;gift&quot;: &quot;一杯可乐&quot;
      �   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ��\  K�Kfrom_apiwedatas_user_card_category_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | ccid | bigint(20) | NO |  | 卡类别ID | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | all_user | int(10) | NO |  | 总会员量 | 
 | demotion_num | int(4) | YES | 0 |  | 
 | cancel_card_member_total | int(10) | YES | 0 |  | 
cY��    �发送人数。 | 
 | aTotalSendNum | int(10) unsigned | NO | 0 | 活动实际发送人数。 | 
 | bsid | int(10) unsigned | NO | 0 | 筛选器规则ID | 
 | aFuncModules | smallint(5) unsigned | NO | 0 | 当前营销活动的一些扩展功能标识，按位与。 | 
 | ccids | varchar(255) | NO |  | 开卡关怀规则适用的会员卡类型列表，半角逗号分隔多个，all 为适用所有卡类型，包括后期再添加的新卡类型。 | 
 | aChargeNum | int(10) unsigned | NO | 0 | 赠送储值。 | 
 | aCreditNum | int(10) unsigned | NO | 0 | 赠送积分。 | 
 | uQuestionId | int(10) unsigned | NO | 0 | 答卷ID。 | 
 | aRuleSummary | text | NO |  | 积分累计活动的活动规则说明内容 | 
 | aExtendModule | int(10) unsigned | NO | 0 | 按位与扩展功能字段 | 
 | originalBid | int(10) unsigned | NO | 0 | 合作商ID | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | aAdvanceDays | tinyint(3) unsigned | NO | 0 | 生日活动提前赠券天数 | 
cY��&   o) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  |  | 
 | aType | smallint(5) unsigned | NO |  |  | 
 | aName | varchar(32) | NO |  |  | 
 | aSids | text | NO |  |  | 
 | aStartTime | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aEndTime | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aLiveTime | varchar(256) | NO |  |  | 
 | aCoupons | text | NO |  |  | 
 | aReachMoney | int(10) unsigned | NO |  |  | 
 | aReachCount | smallint(6) | NO |  |  | 
 | aSummary | text | NO |  |  | 
 | aCreator | int(10) unsigned | NO |  |  | 
 | aModifier | int(10) unsigned | NO |  |  | 
 | aCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | aStatus | tinyint(3) unsigned | NO |  |  | 
 | msgMessageId | int(10) unsigned | NO | 0 | welife_messages.msgMessageId | 
 | smsId | int(10) unsigned | NO | 0 | WeSms.sms_messages.id | 
 | aExceptSendNum | int(10) unsigned | NO | 0 | 活动预览到的�    �  �                                                                                                                         �q�H 	7�showdoc	验证实体卡信息
    
**简要描述：** 

- 验证实体卡信息，
- 开卡：实体卡是否已经开卡，手机号是否已开卡，开卡是否需要进行短信验证，如果需要，则发送验证码
- 绑卡：实体卡是否已经开卡

**请求URL：** 
- ` /user/checkcard `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:-----|:----- |-----   |
 | phone | string | 开卡用户的手机号 | 字符串 |  开卡：是  绑卡：否 |
 | acno | string | 实体卡卡号或磁道号 | 字符串 |  开卡：是  绑卡：是 |
 | sid | int | 门店id 在哪个门店开的卡 | 数字 |  开卡：是  绑卡：否 |
 | mode | string | 验证方式 开卡(默认):open  绑卡:bind | 字符串 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;err  �    ��返回剩余积分l   |  2312       |
| receive_credit              |  int  |   本次交易，奖励用户的积分数量(单位:个)，未奖励则返回0    |  10       |
| coupons              |  array  |   本次交易，奖励用户的券    |   详情见【coupons返回值】      |
**coupons返回值**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| couponid     |  int  |   券模板id    |  123       |
| type              |  int  |   券类型    |  1:代金券     2:礼品券       |
| name           |  string  |   券名称    |  30元代金券       |
| amount        |  int  |   券面额(单位:元)    |  30     |
| summary     |  string  |   使用条件与限制    |  满200元可使用       |
| num              |  int  |   赠送数量    |  2       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��w                                                                                     " �"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �6�L 	=�showdoc	修改会员交易密码
    
**简要描述：** 

- 修改会员的交易密码
   ?�^�K 	1�qshowdoc	修改会员信息
    
**简要描述：** 

- 修改会员的基础信息

**请   A    024) | NO |  | 公司名字 | 
 | pcContactPerson | varchar(128) | NO |  | 联系人 | 
 | pcPhone | varchar(32) | NO |  | 手机号 | 
 | pcServicePhone | varchar(32) | NO |  | 客服电话 | 
 | pcEmail | varchar(1024) | NO |  | 联系邮箱 | 
 | pcCity | int(11) | NO | 0 | 城市 | 
 | pcAddress | varchar(1024) | NO |  | 公司地址 | 
 | pcContractStartDate | date | NO | 1970-01-01 | 合同起始日期 | 
 | pcDesc | varchar(2048) | NO |  | 介绍 | 
 | pcHeadPic | varchar(1024) | NO |  | 公司logo | 
 | pcContractPic | varchar(2048) | NO |  | 合同图片(json，最多10张） | 
 | pcCreator | int(11) | NO | 0 | 创建者ID | 
 | pcCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | pcUpdator | int(11) | NO | 0 | 修改者ID | 
 | pcUpdated | datetime | NO | 1970-01-01 00:00:00 | 更新时间 | 
 | pcDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | pcStatus | tinyint(4) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��-   v�生成一个URL给商家（例如：https://h5.acewill.net/frontend/redirect/2Bm）
3. 商家把代理商或城市经理提供的URL设置到微信菜单，或通过微信端进行打开，通过此链接会跳转到商家提供的URL上，并会附带token参数，此token的值就是wl_token的值（跳转后的结果例如：http://domain/getToken?token=aoiof23a2lgfb8fgjdff）
4. 获取token的值，调用/user/auth接口，传wl_token参数，即可获得到用户信息（包括openid）

**请求URL：** 
- ` /user/auth `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:----- |-----   |
 | wl_token | string | 微信的用户的wl_token | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;cno&quot;: &quot;1276384&quot;,
    &quot;openid&quot;: &quot;oA_oKvwsaTOhzcP8xQ4o0wtDiU88&quot;,
    &quot;name&quot;: &quot;崔春卉&quot;,
    &quot;    sex&quot;: &quot;2&quot;,
    &quot;birthday&quot;: &quot;2016-05-10&quot;,
    &quot;grade&quot;: &quot;3329&quot;,
    &quot;balance&quot;: &quot;56800&quot;,
    &quot;credit&quot;: &quot;56&quot;,
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:----- |:-----|-----                           |
| cno             |  string  |   用户卡号    |  1265693       |
| openid       |  string  |   微信用户openid    |    oA_oKvwsaTOhzcP8xQ4o0wtDiU88    |
| name             |  string  |   用户姓名    |  xiaowo       |
| birthday             |  date  |   用户生日    |  1989-03-09       |
| sex              |  int  |   用户性别    |  1:男  2:女       |
| grade              |  int  |   等级编号    |  3345       |
| balance         |  int  |   储值余额    |  95000(分)       |
| credit           |  int  |   用户积分    |  10381       |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



Y��   rot;,
        &quot;summary&quot;: &quot;&lt;ul&gt;&lt;li&gt;兑换1瓶牛奶&lt;/li&gt;&lt;/ul&gt;&quot;,
        &quot;num&quot;: 10
      }
    ]
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| tcid              |  int  |   交易id，用于打印流水号   |  1535178031641110       |
| verify_sms   |  bool  |   是否需要短信验证    |  true:需要  false:不需要       |
| verify_password     |  bool  |   是否需要交易密码验证    |  true:需要  false:不需要       |
| grade              |  array  |   本次交易，用户升级至的等级信息，未升级则返回null  | {&quot;name&quot;: &quot;累积3次&quot;} |
| balance       |  int  |   本次交易使用储值后，用户的储值余额(单位:分)，未使用也返回剩余储值    |  10000       |
| credit         |  int  |   本次交易使用积分后，用户的积分剩余(单位:个) ，未使用�   w5 |  是 |
| deno | int | 券面值 单位:分 | 2000 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;tcid&quot;: 1535191762408708,
    &quot;verify_sms&quot;: false,
    &quot;verify_password&quot;: true,
    &quot;grade&quot;: {
      &quot;name&quot;: &quot;累积3次&quot;
    },
    &quot;balance&quot;: 85000,
    &quot;credit&quot;: 10281,
    &quot;receive_credit&quot;: 200,
    &quot;coupons&quot;: [
      {
        &quot;couponid&quot;: &quot;19222&quot;,
        &quot;type&quot;: &quot;1&quot;,
        &quot;name&quot;: &quot;20元代金券&quot;,
        &quot;amount&quot;: &quot;20&quot;,
        &quot;summary&quot;: &quot;&lt;ul&gt;&lt;li&gt;满300元可用&lt;/li&gt;&lt;/ul&gt;&quot;,
        &quot;num&quot;: 10
      },
      {
        &quot;couponid&quot;: &quot;19223&quot;,
        &quot;type&quot;: &quot;2&quot;,
        &quot;name&quot;: &quot;牛奶礼品券&quot;,
        &quot;amount&quot;: &quot;14&qu    J  J                                                                �2�c  +�from_apiwelife_managers|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | mid | int(20) unsigned | NO |  |  | 
 | bid | int(20) unsigned | NO |  |  | 
 | sid | int(20) unsigned | NO |  |  | 
 | mName | varchar(20) | NO |  |  | 
 | mPhone | char(11) | NO |  |  | 
 | mRoleId | tinyint(3) | NO |  |  | 
 | mShops | text | NO |  |  | 
 | mStatus | tinyint(3) | NO |  |  | 
 | mCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | mCashierPermission | int(11) | NO |  |  | 
 | mPassword | varchar(32) | NO |  | 密码md5 | 
 | mAliasName | varchar(24) | NO |  | 别名默认手机号 | 
 | mIsRegion | tinyint(1) unsigned | NO | 0 | 是否为区域店长。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��    D                                                                                                                                                                                                                                                                �,�b  9�from_apiwelife_card_categories|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ccid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | ccIsCommon | tinyint(1) unsigned | NO | 0 | 是否普通会员 1 是 0不是 | 
 | ccName | v   ��0�a  ;�	from_apiwedatas_welife_user_mvm|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bid | bigint(20) | NO |  | 商户id | 
 | uid | bigint(20) | NO |  | uid | 
 | uname | varchar(100) | YES |  | 姓名 | 
 | sex | int(3) | YES |  | 性别 | 
 | uphone | bigint(20) | YES |  | 电话 | 
 | birthday | varchar(100) | YES |  | 生日 | 
 | register_sid | bigint(20) | YES |  | 注册门店 |    f    �回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:-----|:-----|-----                           |
| cno             |  long  |   用户卡号    |  1265693       |
| openid       |  string  |   微信用户openid    |    oA_oKvwsaTOhzcP8xQ4o0wtDiU88    |
| name             |  string  |   用户姓名    |  xiaowo       |
| birthday             |  date  |   用户生日    |  1989-03-09       |
| sex              |  int  |   用户性别    |  1:男  2:女       |
| grade              |  int  |   等级编号    |  3345       |
| balance         |  int  |   储值余额    |  95000(分)       |
| credit           |  int  |   用户积分    |  10381       |
| open_source       |  string  |   会员开卡来源    |  王府井店       |
| open_source_shop_id    |  int  |   会员开卡来源的门店id   |  1234234  开卡来源不是门店则为空字符串&quot;&quot;  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


Y��t   x��计的次数 | 数字 |  否 |
| remark | string | 交易备注 | 字符串 |  否 |
| products | array | 菜品(产品)明细 | 详情见【products菜品(产品)明细】 |  否  | 
 | biz_id | string | 交易业务号，收银方保证全部门店唯一，提交交易需要biz_id | 字符串64位 |  是 |
 
**products菜品(产品)明细**

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
| name | string | 菜品(产品)名称，不能为空 | 红烧牛肉面 |  是 |
| no | string | 菜品(产品)编号 | 1269 ，不能为0|  是  | 
| num | int | 菜品(产品)数量，不能为0 | 2 |  是  |  
| price | int | 菜品(产品)单价，单位（分）可以为0| 2000 |  是  | 
| is_activity | int | 是否参加活动 | 1:参加   2:不参加 |  是  | 
**diy_gift_coupon_pay自定义面值礼品券列表**

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
| user_coupon_id | int | 用户券id | 132324234534   7 7                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             �E�  1�=from_apiwelife_role_module|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | RoleModuleId | int(11) unsigned | NO |  | primary key | 
 | RoleId | int(11) unsigned | NO |  | role表的主键 | 
 | ModuleId | int(11) unsigned | NO |  | Module表的主键 | 
 | AddTime | timestamp | NO | 0000-00-00 00:00:00 | 添加时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 最后修改时间 | 
cY��.    [  [                                                                                 �!�^  3�sfrom_apiwedatas_user_stat_t|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | new_user_weixin | int(10) | NO |  | 新增微信关注会员 | 
 | new_unregistered_user | int(10) | NO |  | 新增取消关注会员量 | 
 | new_user_actual | int(10) | NO |  | 新增实体卡会员 | 
 | all_user | int(10) | NO |  | 累计会员量 | 
 | new_user_consomer | int(10) | NO |  | 新增消费会员量 | 
 | new_user_charger | int(10) | NO |  | 新增储值会员量 | 
 | all_user_consomer | int(10) | NO |  | 累计消费会员量 | 
 | all_user_charger | int(10) | NO |  | 累计储值会员量 | 
 | all_unregistered_user | int(10) | NO |  | 取消关注会员总量 | 
cY��   | 9:点评 10:其他  11:支票  12:集团消费 |  是 |
 | sub_balance | int | 消费使用储值金额(单位:分) | 数字 |  否 |
 | sub_credit | int | 消费使用积分抵现(单位:个) | 数字 |  否 |
  | credit_amount | int | 自定义消费赠送积分(单位:分) | 数字  -1:不送积分    0:按照实际消费金额赠送  其他数字：指定消费金额赠送，不可以超过实际消费金额 |  否 |
 | deno_coupon_ids | array | 使用的代金券列表 | [&quot;1496517402155926&quot;,&quot;1496517402155927&quot;] |  否 |
 | gift_coupons_ids | array | 使用的礼品券列表 | [&quot;1496517402155926&quot;,&quot;1496517402155927&quot;]  |  否 |
 | diy_gift_coupon_pay | array | 使用的可自定义金额的礼品券列表（券面值单位:分） | 详情见【diy_gift_coupon_pay自定义面值礼品券列表】  |  否  | 
 | activity_ids | array | 参加的活动列表 | [&quot;3001&quot;,&quot;3005&quot;] |  否 |
 | count_num | int | 参加累计次数活动，本次交易应�     int(11) | NO |  | 满足条件的总用户数 | 
 | bsWxTotal | int(11) | NO |  | 满足条件的微信用户数 | 
 | bsDpTotal | int(11) | NO |  | 满足条件的点评用户数 | 
 | bsUserTotal | int(11) | NO |  | 创建筛选器时商家的用户总数 | 
 | bsShopTotal | text | NO |  | 满足条件的门店用户人数统计 | 
 | bsQueryId | varchar(200) | NO |  | 筛选器查询id | 
 | bsUids | mediumblob | NO |  | 筛选器统计出来的用户id集合 | 
 | bsResultType | tinyint(4) | NO |  | 筛选器统计结果类型 | 
 | bsCreated | datetime | NO |  |  | 
 | bsUpdated | datetime | NO |  |  | 
 | bsDeleted | datetime | NO |  |  | 
 | bsStatus | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | IsDeleted | tinyint(4) | NO | 0 |  | 
 | bsCardTotal | int(11) | NO | 0 | 实体卡用户数量 | 
 | bsSimTotal | int(11) unsigned | NO | 0 | 发短信人数 | 
 | mid | int(10) unsigned | NO |  | 操作员id | 
 | sid | int(10) unsigned | NO |  | 门店id | 
cY��'   s s                                                                                                                                                                                                                                                                                                                                                                         ��  7�/from_apiwelife_biz_extras_old|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | beCompanyName | varchar(128) | NO |  |  | 
 | beContactUser | varchar(128) | NO |  |  | 
 | beContactPhone | varchar(12) | NO |  |  | 
 | beContactPosition | varchar(32) | NO |  |  | 
 | beInvoiceTitle | varchar(64) | NO |  |  | 
 | beBank | varchar(64) | NO |  |  | 
 | beAccountNumber | varchar(19) | NO | 0 |  | 
 | beBusinessLicense | mediumblob | YES |  | Ӫҵִ | 
 | beIDCard | mediumblob | YES |  |  | 
 | beTradeType | varchar(3   �    ng | 收银员账户名 | 字符串 |  是 |
 | password | string | 收银员密码 | 字符串 |  是 |
 | shop_id | string | 门店id | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;brand_name&quot;: &quot;新微生活&quot;,
    &quot;shop_name&quot;: &quot;东直门外大街&quot;,
    &quot;shop_id&quot;: &quot;1786077185&quot;,
    &quot;cashier_id&quot;: &quot;1186529944&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| brand_name             |  string  |   商家名称    |  商家名       |
| shop_name             |  string  |   门店名称    |  门店名      |
| shop_id             |  int  |   门店id    |  1265693       |
| cashier_id              |  int  |   收银员id    |  1526932490281211       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���   G G                                                                                                                                                                                                                                                                                                                             �-�C 	1�showdoc	接口调用流程**接口请求地址：**
- https://api.acewill.net
A+接口所有接口只支持POST请求.返回值为JSON格式字符串.

**请求示例：**
https://api.acewill.net/user/test
注：此URL不存在，仅用于示例展示，接口URL见具体接口说明

**请求参数：**

| 字段名 |   说明  |
 |:----   |-----   |
 | req |   接口请求参数，根据调用的接口要求定义JSON数据  |
 | appid |   商家接口appid  |
 | v |   接口版本号，当前版本2.0  |
 | ts |  请求时间戳  |
 | sig |  请求签名 MD5字符串，签名生成方式见接口说明-安全规范   |
 | fmt |  返回数据格式，现支持JSON     �   �效，只是提交消费信息，查看交易可能产生的结果
备注：券使用可以超过消费总金额，只允许超过1张，使用自定义金额礼品券金额不可以超过消费总金额
消费总金额 = 储值+积分+券+实际支付金额（现金、银行卡、微信、支付宝、支票、集团消费等其中之一的支付方式支付的金额）

**请求URL：** 
- ` /deal/preview `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno | string | 用户卡号 | 字符串 |  是 |
 | shop_id | int | 消费门店id | 数字 |  是 |
 | cashier_id | int | 收银员id | 数字 |  是 |
 | consume_amount | int | 消费总金额(单位:分) | 数字 |  是 |
  | payment_amount | int | 实际支付金额(单位:分) 不传默认为0 | 数字 |  是 |
 | payment_mode | int | 支付方式 | 数字 1:现金   2:银行卡   3:店内微信   4:支付宝   6:线上微信 7:百度糯米 8:美团     W                                                                                                                                                                                                                                                                 �2�$  #�%from_apiwelife_bizs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | bBrandName | varchar(128) | NO |  | Ʒ | 
 | bBrandNamePy | varchar(256) | NO |  |  | 
 | bType | tinyint(3) unsigned | NO |   ���#  -�afrom_apiwelife_bizs_test|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | bBrandName | varchar(128) | NO |  | Ʒ | 
 | bBrandNamePy | varchar(256) | NO |  |  | 
 | bType | tinyint(3) unsigned | NO |  |  | 
 | bVerifyType | tinyint(3) unsigned | NO |  |  | 
 | bCodeShowType | tinyint(3) u   �   = =                                                                                                                                                                                                                                                                                                                   �7�U 	7�	showdoc	获取收银员列表
    
**简要描述：** 

- 获取商家指定门店的收银员列表

**请求URL：** 
- ` /cashier/list `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | shop_id  | int | 门店id | 数字 |  是 |
 | page | int | 分页，默认第1页 | 数字 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: [
    {
      &quot;cashier_id&quot;: &quot;1101874833&quot;,
      &quot;shop_id&quot;: &quot;4101315464&quot;,
      &quot;username&quot;: &quot;收银员cch&quot;,
      &quot;nicknam   :    ** 
- ` /user/account `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno | string | 电子卡卡号、实体卡卡号、手机号、实体卡磁道号 | 数字 |  是 |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| cno             |  string  |   用户卡号    |  32142    |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���                                                                                             � �                                                                                                                                                                                                                                                                                                                                                                                                                                                     ��l�E 	=��	showdoc	获取用户账户信息
    
**简要描述：** 

- 根据电子卡号、实体卡号或手机号获取用户的账户信息

**请求URL：** 
- ` /user/account `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:----- |:----- |-----   |
 | cno | string | 电子卡卡号、实体卡卡号、手机号、实体卡磁道号 | 数字 |  是 |
  | shop_id | string | 门店编号（备注：用于获取会员在此门店可以使用的储值，门店可用最大储值返�   �     | 字符串 |  是 |
 | acno | string | 实体卡卡号 | 字符串 |  是 |
 | sid | int | 门店id 在哪个门店开的卡 | 数字 |  是 |
 | code | string | 短信验证码 | 字符串 |  否 |
| username | string | 王小二 | 字符串 |  否| 
| gender | int | 性别 | 0:未知  1:男  2:女 |  否 |
 | birthday | date | 生日  | 日期  2001-01-02 |  否 |
| birthflay | int | 生日日期类型   | 0:公历   1:农历 |  否 |
| password | string | 交易密码，长度为6位数字  | 123456 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:-----|:-----|-----                           |
| result        |  string  |   开卡结果   SUCCESS:成功   FAIL:失败    |  SUCCESS      |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


Y��                          �V�F 	I�Ishowdoc	获取微信用户账户信息
    
**简要描述：** 

- 根据微信openid获取用户的账户信息

**请求URL：** 
- ` /user/getinfo `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:----- |:----- |-----   |
 | openid | string | 微信的用户openid | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;cno&quot;: &quot;1276384&quot;,
    &quot;openid&quot;: &quot;oA_oKvwsaTOhzcP8xQ4o0wtDiU88&quot;,
    &quot;name&quot;: &quot;崔春卉&quot;,
    &quot;sex&quot;: &quot;2&quot;,
    &quot;birthday&quot;: &quot;2016-05-10&quot;,
    &quot;grade&quot;: &quot;3329&quot;,
    &quot;balance&quot;: &quot;56800&quot;,
    &quot;credit&quot;: &quot;56&quot;,
    &quot;open_source&quot;: &quot;重名品牌&quot;,
    &quot;open_source_shop_id&quot;: &quot;1302733003&quot;
  }
}

```

 **�   {    �员所属集团名称    |  XXX集团       |
| in_effect   |  bool  |   会员所属集团是否有效    |  true:有效  false:无效       |
| type       |  int  |   会员所属集团账户类型    |  1:挂账账户   2:充值账户       |
| limit       |  int  |   会员所属集团可用额度（单位：分）    |  1000       |

**trade_verify返回值**

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:-----|:----- |----- |
| charge_verify       |  bool  |   消费使用储值是否需要验证    |   true:验证  false:不验证       |
| credit_verify   |  bool  |   消费使用积分是否需要验证    |  true:验证  false:不验证       |
| cash_coupon_verify       |  bool  |   消费使用代金券是否需要验证    |   true:验证  false:不验证       |
| gift_coupon_verify       |  bool  |   消费使用礼品券是否需要验证    |   true:验证  false:不验证       |
 **备注** 

- 更多返回错误代码请看错误代码描述


Y���    R                                                                                                                                                                                                                                                                               �+�   /�from_apiwelife_biz_orders|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | boId | varchar(16) | NO |  | 订单号 | 
 | bid | int(11) unsigned | NO | 0 | 商家id | 
 | sid | int(11) unsigned | NO | 0 |    ׃*�  9�from_apiwelife_biz_orders_assn|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | Id | int(11) | NO |  | primary key | 
 | OrderId | int(11) | NO |  | 微生活订单主键 | 
 | DealOrderId | int(11) | NO |  | 支付中心的订单id | 
 | AddTime | datetime | NO |  | 订单创建创建时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 最近更新时间 | 
cY��'   ���    |  2016-05-23 23:59:59       |
| limitations     |  array  |   使用条件与限制    |  [&quot;满100元可用&quot;]       |
| enable_amount     |  float  |   启用金额，例如：总消费金额满100元可用 （单位：元） 0为不限制  |   100    |
| max_use     |  int  |   同一种券一次最多可以使用几张【例如：30元代金券，用户有3张，max_use=1，则用户每次限制最多使用1张，如果是0则不限制】    |   1    |
| mix_use     |  boolean  |   是否支持与其他券混合使用【例如：用户有30元代金券1张，20元代金券1张，30元代金券mix_use=false，则用户用了30元则不能用20元代金券，用了20元则不能用30元代金券。】   |   true   |
| is_diy_deno     |  boolean  |   是否支持自定义面值，仅礼品券支持自定义面值   |   true   |

**group_company返回值**

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:-----|:----- |----- |
| name       |  string  |   �    | tinyint(3) unsigned | NO | 0 | 是否是阴历生日 | 
 | uPayPassword | varchar(32) | NO |  |  | 
 | uCustomFields | text | NO |  | 自定义项 | 
 | uLastRegistered | datetime | NO | 0000-00-00 00:00:00 | 最后一次关注时间 | 
 | uLock | tinyint(3) unsigned | YES | 0 | 1锁定 0未锁 | 
 | ccid | int(10) unsigned | NO | 0 | 关联卡种类 | 
 | uCustomChargePay | tinyint(3) unsigned | NO | 0 | 收银员自定义消费使用储值验证方式 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | uSetBirthDayTime | datetime | NO | 0000-00-00 00:00:00 | 用户最后一次设置生日的时间 | 
 | uPhonePrefix | int(10) unsigned | NO | 0 | 用户手机号区号 | 
 | uFromOtherCNo | varchar(256) | NO |  | 外卡导入-旧系统卡号 | 
 | uFromOtherCMoney | int(11) | NO | 0 | 外卡导入-旧系统储值余额（单位：分） | 
 | uFromOtherCCredit | int(11) | NO | 0 | 外卡导入-旧系统积分余额 | 
 | uAlipayid | varchar(64) | NO |  | 对应支付宝id | 
cY��$   � | openid | varchar(32) | NO |  | openid | 
 | uRegistered | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uUnRegistered | datetime | NO | 0000-00-00 00:00:00 | ȡ | 
 | uUserInfoStatus | tinyint(3) unsigned | NO | 0 |  | 
 | uConsumeNum | int(11) unsigned | YES | 0 |  | 
 | uConsumeAmount | int(11) unsigned | NO | 0 |  | 
 | uCardStatus | tinyint(3) unsigned | NO | 0 |  | 
 | uActivityStatus | int(11) unsigned | NO | 0 |  | 
 | uCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | uDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | uStatus | tinyint(3) unsigned | NO | 0 | ״̬ 1 | 
 | uActualNo | varchar(64) | NO |  |  | 
 | uWeixinCardFlag | varchar(64) | NO |  | 卡包code | 
 | uCrmNo | varchar(40) | NO |  | 对接商家卡号 | 
 | uCrmUid | varchar(32) | NO |  | 通卡原始wxuin | 
 | uUserInfoCompleted | datetime | NO | 0000-00-00 00:00:00 | 用户首次完善资料时间 | 
 | uWXNickname | varchar(128) | NO |  |  | 
 | uIsLunarBirth    �    |

**coupons返回值**
备注：不在有效期的券，不返回

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:-----|:----- |----- |
| template_id     |  string  |   模板id    |  19222       |
| coupon_ids     |  array  |   券id    |  [&quot;1535100685338583&quot;,&quot;1535100685338583&quot;]       |
| title     |  string  |   券名称    |  20元代金券       |
| deno     |  int  |   券面值，单位(元)    |  20       |
| type     |  int  |   券类型    |  1:代金券   2:礼品券       |
| shop_ids     |  array  | 可用门店列表  | {&quot;1112645845&quot;:&quot;德胜门店江湖菜&quot;,&quot;1112645845&quot;:&quot;三利大厦店&quot;}   |
| sids     |  array  |   可用门店id列表    |  [1112645845,1429830612]       |
| products     |  array  |  菜品(产品)id列表       |  [1342, 3243]         |
| effective_time     |  datetime  |   券生效时间    |  2016-05-23 00:00:00       |
| failure_time     |  datetime  |   券失效时�   �返回null，如果商家后台配置了门店间储值不可以通用，并且请求参数传了shop_id，则必须要按照此参数的返回值进行门店消费使用储值限制】      |  85800       |
| open_source       |  string  |   会员开卡来源    |  王府井店       |
| open_source_shop_id    |  int  |   会员开卡来源的门店id   |  1234234  开卡来源不是门店则为空字符串&quot;&quot;  |
| group_company       |  array  |   会员所属集团，用于集团消费，如果没有则为null    |    详情见【group_company返回值】      |
| trade_verify       |  array  |   交易验证项，如果不需要验证则为null    |    详情见【trade_verify返回值】      |
| trade_verify_type       |  string  |   会员交易验证方式   |    短信：sms  密码：password      |
| qcno       |  long  |   微信卡面的二维码卡号    |  通过微信卡面的二维码卡号进行查询才会返回【备注：用此卡号进行交易，可以免交易验证】       � �F �                                                                                                                          �:�l  '�1from_api	wedatas_tests|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | value | int(11) | NO |  |  | 
cY����]�k  A�]from_api	wedatas_stat_product_daily|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | sdate | int(10) | YES |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | plNo | varchar(64) | YES |  |  | 
 | totalNum | double | YES |  |  | 
 | totalMoney | double | YES |  |  | 
cY����U�j  E�Ifrom_api	wedatas_stat_product_daily_t|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | sdate | text | YES |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | plNo | text | YES |  |  | 
 | totalNum | double | YES |  |  | 
 | totalMoney | double | YES |  |  | 
cY���   �       |  int  |   用户积分    |  10381       |
| use_credit        |  bool  |   是否可以使用积分消费    |  true:可以  false:不可以      |
| coupons              |  array  |   可用券    | 详情见【coupons返回值】     |
| in_effect              |  bool  |   用户是否有效    |  true:有效  false:无效       |
| follow              |  bool  |   会员是否关注公众号【注：仅电子卡会员存在此字段】    |  true:关注  false:未关注       |
| acno       |  long  |   实体卡卡号    |  有实体卡则有值       |
| max_use_saving       |  int  |  可以使用的储值最大值【备注：根据储值规则的首次使用储值比例而来，可结合系统情况决定是否限制，接口只做提示，不做限制】      |  85800       |
| max_shop_use_saving       |  int  |  门店可用最大储值余额【备注：如果请求参数没传门店shop_id，此参数返回null，如果商家后台没有配置门店间储值不可以通用，此参数   ��     |
| name             |  string  |   用户姓名    |  xiaowo       |
| phone              |  int  |   用户手机号    |  13718896139       |
| birthday             |  date  |   用户生日    |  1989-03-09       |
| gender              |  int  |   用户性别    |  1:男  2:女       |
| registered         |  date  |   注册时间    |  2016-02-23       |
| openid    | string    |  微信用户openid【注：仅电子卡会员存在此字段】  | ohBubwUZZVIa6JdNXHZ0Jp0-a08M         |
| grade              |  int  |   等级编号    |  3345       |
| grade_name              |  string  |   等级名称    |  VIP金卡       |
| member_discount             |  int  |   会员价比例(百分比)    |  40       |
| member_discount_shops    |  array  |   会员价适用门店    | 全部门店：{&quot;all&quot;: 1,&quot;list&quot;: []}    部分门店{&quot;all&quot;: 0,&quot;list&quot;: [3405474861, 133412334]}   |
| balance         |  int  |   储值余额    |  95000(分)       |
| credit       �ay&quot;: &quot;&quot;,
      &quot;gender&quot;: 0,
      &quot;registered&quot;: &quot;2016-05-18&quot;,
      &quot;grade&quot;: 0,
      &quot;grade_name&quot;: &quot;普通会员&quot;,
       &quot;member_discount&quot;: &quot;100&quot;,
       &quot;member_discount_shops&quot;: {
        &quot;all&quot;: 0,
        &quot;list&quot;: [
          3405474861
        ]
      },
      &quot;balance&quot;: 0,
      &quot;credit&quot;: &quot;80&quot;,
      &quot;use_credit&quot;: true,
      &quot;coupons&quot;: [],
      &quot;in_effect&quot;: true,
      &quot;acno&quot;:&quot;123123124134234&quot;,
      &quot;open_source&quot;: &quot;三利大厦&quot;,
      &quot;open_source_shop_id&quot;: &quot;1429830612&quot;
    }
  ]
}
```

 **返回参数说明** 

|参数名|类型|说明|举例 |
|:-----  |:-----|:----- |----- |
| cno             |  string  |   用户卡号    |  1265693       |
| type              |  string  |   用户类型    |    wx:微信卡  dp:点评卡  ph:实体卡  actual:实体�   �ot;title&quot;: &quot;2元累计消费赠芒果汁礼&quot;,
          &quot;deno&quot;: &quot;2&quot;,
          &quot;type&quot;: &quot;2&quot;,
          &quot;shop_ids&quot;: {
            &quot;1786077185&quot;: &quot;东直门外大街&quot;
          },
          &quot;sids&quot;: [
            1786077185
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-04-20 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-07-18 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;适用门店：东直门大街&quot;,
            &quot;90日有效&quot;
          ]
        }
      ],
      &quot;in_effect&quot;: true,
      &quot;acno&quot;:&quot;123234135134&quot;
    },
    {
      &quot;uid&quot;: &quot;1534645660546904&quot;,
      &quot;uno&quot;: &quot;1685251763755677&quot;,
      &quot;type&quot;: &quot;ph&quot;,
      &quot;name&quot;: &quot;&quot;,
      &quot;phone&quot;: &quot;13716406139&quot;,
      &quot;birthd   �街店适用&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;18982&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1532095213986701&quot;
          ],
          &quot;title&quot;: &quot;29元Lj代金券&quot;,
          &quot;deno&quot;: &quot;29&quot;,
          &quot;type&quot;: &quot;1&quot;,
          &quot;shop_ids&quot;: {
            &quot;1786077185&quot;: &quot;东直门外大街&quot;
          },
          &quot;sids&quot;: [
            1786077185
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-04-20 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-07-18 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;90日有效&quot;,
            &quot;东直门大街店适用&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;18983&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1532095214011607&quot;
          ],
          &qu   �uot;failure_time&quot;: &quot;2016-07-04 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;适用门店：东直门大街&quot;,
            &quot;90日有效&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;18982&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1530840205140849&quot;,
            &quot;1530840205119425&quot;
          ],
          &quot;title&quot;: &quot;29元Lj代金券&quot;,
          &quot;deno&quot;: &quot;29&quot;,
          &quot;type&quot;: &quot;1&quot;,
          &quot;shop_ids&quot;: {
            &quot;1786077185&quot;: &quot;东直门外大街&quot;
          },
          &quot;sids&quot;: [
            1786077185
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-04-06 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-07-04 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;90日有效&quot;,
            &quot;东直门大    �  �                                                                                                                                                                                                                    ��d  9�gfrom_apiwelife_qrcode_channels|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | qcid | int(10) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO | 0 | 渠道所属商户ID。 | 
 | qcName | varchar(24) | NO |  | 渠道名称。 | 
 | qcCreated | datetime | NO | 0000-00-00 00:00:00 | 渠道名创建时间。 | 
 | qcUpdated | datetime | NO | 0000-00-00 00:00:00 | 渠道名最近一次更新时间。 | 
 | qcDeleted | datetime | NO | 0000-00-00 00:00:00 | 渠道名删除时间。 | 
 | qcStatus | tinyint(3) unsigned | NO | 1 | 记录状态。 | 
 | qcSystemStatus | tinyint(3) | NO | 0 | 是否系统生成（用于判断系统生成的不可删除） | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��   �: &quot;东直门外大街&quot;
          },
          &quot;sids&quot;: [
            1786077185
          ],
          &quot;effective_time&quot;: &quot;2016-04-05 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-07-03 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;90日有效&quot;,
            &quot;东直门大街店适用&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;18983&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1530840205158516&quot;
          ],
          &quot;title&quot;: &quot;2元累计消费赠芒果汁礼&quot;,
          &quot;deno&quot;: &quot;2&quot;,
          &quot;type&quot;: &quot;2&quot;,
          &quot;shop_ids&quot;: {
            &quot;1786077185&quot;: &quot;东直门外大街&quot;
          },
          &quot;sids&quot;: [
            1786077185
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-04-06 00:00:00&quot;,
          &q   �ds&quot;: {
            &quot;1112645845&quot;: &quot;德胜门店江湖菜&quot;,
            &quot;1429830612&quot;: &quot;三利大厦店&quot;
          },
          &quot;sids&quot;: [
            1429830612,
            1112645845
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-05-13 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-06-13 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;测试&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;18982&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1530761556926062&quot;,
            &quot;1530759291142139&quot;,
            &quot;1530761612287468&quot;,
            &quot;1530761612304170&quot;
          ],
          &quot;title&quot;: &quot;29元Lj代金券&quot;,
          &quot;deno&quot;: &quot;29&quot;,
          &quot;type&quot;: &quot;1&quot;,
          &quot;shop_ids&quot;: {
            &quot;1786077185&quot;   �29830612&quot;: &quot;三利大厦店&quot;,
            &quot;1786077185&quot;: &quot;东直门外大街&quot;,
            &quot;3946095842&quot;: &quot;likn&quot;,
            &quot;3953594652&quot;: &quot;大观园&quot;
          },
          &quot;sids&quot;: [
            3953594652,
            1429830612,
            1786077185,
            1112645845,
            3946095842,
            1302733003
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-05-13 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-06-01 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;测试&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;19162&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1534199237017144&quot;
          ],
          &quot;title&quot;: &quot;10天后可使用礼品券&quot;,
          &quot;deno&quot;: &quot;10&quot;,
          &quot;type&quot;: 2,
          &quot;shop_i                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �a�9  +�{from_apiwelife_datasets|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | dKey | char(32) | NO |  | md5(配置的key) | 
 | dValue | text | NO |  | 配置的value | 
 | dCreated | datetime | NO | 0000-00-00 00:00:00 | 配置创建时间 | 
 | dUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��)   �uot;,
            &quot;3953594652&quot;: &quot;大观园&quot;
          },
          &quot;sids&quot;: [
            3953594652,
            1429830612,
            1786077185,
            1112645845,
            3946095842,
            1302733003
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-05-13 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-05-28 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;asdfsadf&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;19179&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1534211818738591&quot;
          ],
          &quot;title&quot;: &quot;20元活动创建券&quot;,
          &quot;deno&quot;: &quot;20&quot;,
          &quot;type&quot;: 1,
          &quot;shop_ids&quot;: {
            &quot;1112645845&quot;: &quot;德胜门店江湖菜&quot;,
            &quot;1302733003&quot;: &quot;重名品牌&quot;,
            &quot;14   �quot;: &quot;3161&quot;,
      &quot;grade_name&quot;: &quot;累积3次&quot;,
       &quot;member_discount&quot;: &quot;60&quot;,
       &quot;member_discount_shops&quot;: {
        &quot;all&quot;: 1,
        &quot;list&quot;: []
      },
      &quot;balance&quot;: &quot;300&quot;,
      &quot;credit&quot;: &quot;1&quot;,
      &quot;use_credit&quot;: true,
      &quot;coupons&quot;: [
        {
          &quot;template_id&quot;: &quot;19178&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1534209611437377&quot;
          ],
          &quot;title&quot;: &quot;54元5445&quot;,
          &quot;deno&quot;: &quot;54&quot;,
          &quot;type&quot;: 1,
          &quot;shop_ids&quot;: {
            &quot;1112645845&quot;: &quot;德胜门店江湖菜&quot;,
            &quot;1302733003&quot;: &quot;重名品牌&quot;,
            &quot;1429830612&quot;: &quot;三利大厦店&quot;,
            &quot;1786077185&quot;: &quot;东直门外大街&quot;,
            &quot;3946095842&quot;: &quot;likn&q   �       &quot;3953594652&quot;: &quot;大观园&quot;
          },
          &quot;sids&quot;: [
            3953594652,
            1429830612,
            1786077185,
            1112645845,
            3946095842,
            1302733003
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-05-22 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-06-01 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;adsfasdfdas&quot;,
            &quot;adfasdfafds&quot;
          ]
        }
      ],
      &quot;in_effect&quot;: true,
      &quot;acno&quot;: &quot;12153423413421&quot;
    },
    {
      &quot;cno&quot;: &quot;1264136&quot;,
      &quot;type&quot;: &quot;dp&quot;,
      &quot;name&quot;: &quot;pinzhi&quot;,
      &quot;phone&quot;: &quot;15268561755&quot;,
      &quot;birthday&quot;: &quot;1990-09-09&quot;,
      &quot;gender&quot;: &quot;1&quot;,
      &quot;registered&quot;: &quot;2016-02-22&quot;,
      &quot;grade&   �077185,
            1112645845,
            3946095842,
            1302733003
          ],
          &quot;products&quot;:[1342, 3243],
          &quot;effective_time&quot;: &quot;2016-05-23 00:00:00&quot;,
          &quot;failure_time&quot;: &quot;2016-05-23 23:59:59&quot;,
          &quot;limitations&quot;: [
            &quot;测试&quot;
          ]
        },
        {
          &quot;template_id&quot;: &quot;19207&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1534541031174674&quot;
          ],
          &quot;title&quot;: &quot;testcoupon&quot;,
          &quot;deno&quot;: &quot;5&quot;,
          &quot;type&quot;: &quot;2&quot;,
          &quot;shop_ids&quot;: {
            &quot;1112645845&quot;: &quot;德胜门店江湖菜&quot;,
            &quot;1302733003&quot;: &quot;重名品牌&quot;,
            &quot;1429830612&quot;: &quot;三利大厦店&quot;,
            &quot;1786077185&quot;: &quot;东直门外大街&quot;,
            &quot;3946095842&quot;: &quot;likn&quot;,
        �: true,
      &quot;coupons&quot;: [
      {
          &quot;template_id&quot;: &quot;19222&quot;,
          &quot;coupon_ids&quot;: [
            &quot;1535100685338583&quot;,
            &quot;1535100685119865&quot;,
            &quot;1535100685208627&quot;,
            &quot;1535100685064677&quot;,
            &quot;1535100685252655&quot;
          ],
          &quot;title&quot;: &quot;20元新健券&quot;,
          &quot;deno&quot;: &quot;20&quot;,
          &quot;type&quot;: &quot;1&quot;,
          &quot;shop_ids&quot;: {
            &quot;1112645845&quot;: &quot;德胜门店江湖菜&quot;,
            &quot;1302733003&quot;: &quot;重名品牌&quot;,
            &quot;1429830612&quot;: &quot;三利大厦店&quot;,
            &quot;1786077185&quot;: &quot;东直门外大街&quot;,
            &quot;3946095842&quot;: &quot;likn&quot;,
            &quot;3953594652&quot;: &quot;大观园&quot;
          },
          &quot;sids&quot;: [
            3953594652,
            1429830612,
            1786    umer处理是否成功

2，如果welogs库的welogs_user_birthday_logs表存在该用户的生日信息记录，根据ublLastActivityYear和ublLastActivityTime字段查看用户参与生日活动的年份和时间。如果最后参与活动是今年，表示今年已经参与过生日活动。

3，看ublLastActivityTime 和 uBirthMD的月、日是否相同，若相同，则确认是否是生日当天填写的生日信息。如果是，则去Activity/src/Rpc/YarServer/Activity.php 下的playBirthdayActivity方法查看日志。

4，如果根据3，确认用户参与过活动且不是生日当天参与的生日活动，但是用户没有发券，那么根据ublLastActivityTime字段去看对应那一天的executeBirthdayActivity队列日志，看该商家当天的生日活动执行是不是成功。

5，如果4步骤通过，那么去Coupon下的addCoupon2userLog队列查看当天生日赠券是否涉及该用户

6，如果5步骤通过，则下一步应该是sendCouponBatch or sendCoupon队列。cY��2   ���参数：max_shop_use_saving，此参数只有在商家后台设置门店间储值不通用时才有效）  | 数字 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: [
    {
      &quot;cno&quot;: &quot;1265693&quot;,
      &quot;type&quot;: &quot;wx&quot;,
      &quot;name&quot;: &quot;xiaowo&quot;,
      &quot;phone&quot;: &quot;13716406139&quot;,
      &quot;birthday&quot;: &quot;1989-03-09&quot;,
      &quot;gender&quot;: &quot;2&quot;,
      &quot;registered&quot;: &quot;2016-02-23&quot;,
      &quot;openid&quot;: &quot;ohBubwUZZVIa6JdNZHZ0Jp0-a08M&quot;,
      &quot;grade&quot;: &quot;3776&quot;,
      &quot;grade_name&quot;: &quot;087连卡结算&quot;,
      &quot;member_discount&quot;: &quot;40&quot;,
      &quot;member_discount_shops&quot;: {
        &quot;all&quot;: 1,
        &quot;list&quot;: []
      },
      &quot;balance&quot;: &quot;95000&quot;,
      &quot;credit&quot;: &quot;10381&quot;,
      &quot;use_credit&quot;    �  �                                                                                                                                                                   �O�&  K�7from_apiwelife_boss_manager_action_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bmalId | int(10) unsigned | NO |  | 主键 | 
 | bmalDesc | varchar(32) | NO |  | 操作描述 | 
 | bmalAction | varchar(50) | NO |  | 操作的controller.action | 
 | targetId | varchar(64) | NO |  | 目标id | 
 | ip | varchar(15) | NO |  | 操作ip | 
 | bmalParams | text | NO |  | 请求参数 | 
 | bmName | varchar(32) | NO |  | 操作者用户名 | 
 | bmalStatus | tinyint(1) unsigned | NO |  | 数据状态 | 
 | bmalCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bmalUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | bmalDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'     |

 **POST请求数据格式如下**
```
req={&quot;grade&quot;:1,&quot;limit&quot;:20,&quot;offset&quot;:0,”orderby”:{“balance”:”desc”},”coupons”:[12345,67890],”desc”:[]}&amp;appid=ct_ZjQ4NmU2OTE0OGY1MTJ&amp;v=2.0&amp;ts=1426840526&amp;sig=51bdc1dd175c5f2d973e392bfa412ef7&amp;fmt=JSON
```
**sig生成规范见【安全规范】**
**返回值格式如下**
```
{&quot;errcode&quot;:0, &quot;errmsg&quot;:&quot;OK&quot;, &quot;res&quot;:{&quot;result&quot;:&quot;SUCCESS&quot;}}
```
其中errorCode为错误代码,为0时表示调用成功,result字段中的数据为业务数据;不为0时表示调用失败,errorMsg字段为错误信息.
正确返回示例
```
{&quot;errcode&quot;:0,&quot;errmsg&quot;:&quot;OK&quot;,&quot;res&quot;:{&quot;wlid&quot;:&quot;12201135853160167267&quot;,&quot;type&quot;:&quot;dianping&quot;,&quot;sex&quot;:&quot;1&quot;}
```
错误返回示例
```
{&quot;errcode&quot;:1002,&quot;errmsg&quot;:&quot;数据的签名验证异常&quot;,&quot;res&quot;:null}
```
Y���   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                     � �W 	1�5showdoc	获取活动列表
    
**简要描述：** 

- 获取指定门店用户可参加的活动

**请求URL：** 
- ` /activity/list `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:  ��/�V 	C�showdoc	收银员账号登陆签到
    
**简要描述：** 

- 收银员账号登陆签到

**请求URL：** 
- ` /pos/signin `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | username  | stri   �     |

 **POST请求数据格式如下**
```
req={&quot;grade&quot;:1,&quot;limit&quot;:20,&quot;offset&quot;:0,”orderby”:{“balance”:”desc”},”coupons”:[12345,67890],”desc”:[]}&amp;appid=ct_ZjQ4NmU2OTE0OGY1MTJ&amp;v=2.0&amp;ts=1426840526&amp;sig=51bdc1dd175c5f2d973e392bfa412ef7&amp;fmt=JSON
```
**sig生成规范见【安全规范】**
**返回值格式如下**
```
{&quot;errcode&quot;:0, &quot;errmsg&quot;:&quot;OK&quot;, &quot;res&quot;:{&quot;result&quot;:&quot;SUCCESS&quot;}}
```
其中errorCode为错误代码,为0时表示调用成功,result字段中的数据为业务数据;不为0时表示调用失败,errorMsg字段为错误信息.
正确返回示例
```
{&quot;errcode&quot;:0,&quot;errmsg&quot;:&quot;OK&quot;,&quot;res&quot;:{&quot;wlid&quot;:&quot;12201135853160167267&quot;,&quot;type&quot;:&quot;dianping&quot;,&quot;sex&quot;:&quot;1&quot;}
```
错误返回示例
```
{&quot;errcode&quot;:1002,&quot;errmsg&quot;:&quot;数据的签名验证异常&quot;,&quot;res&quot;:null}
```
cY��&   	 � �@�� �` � �                                                                                                                                    ^ �'3e7d30f3de4c3167bde99d07f782bd7c1d18dcddc6abf4839bb172939bff39a5_�j124.193.69.66_�` �+a619ecc6dc2330fb0e54d812ea1bf0b1768ce720e36b0a973c1e57a24ca6e13cZ2�118.113.211.179Y��^ 	�)5015d617be348f4476f9203b9c1478d152c7ab6f35761338e00dd8af5a1c2870Z,�561.148.196.162Y�+5^ 	�)b7c896143dc108c7a5698d634ff10c47eb79e618a9e64fbf6c70d86592a23e0eZ&y�61.148.196.162Y���^ 	�)59c55c2df8984b25729fd05ef93d888f6e2861463d4d8e114e511842e10b8b64Z&xW61.148.196.162Y��W^ 	�)3c3cc8a713eaa6dea7ff2ed70c2ddb901e2a5da5ef908f7721923cc7cc2d65feZ&v�61.148.196.162Y�϶^ �'3dd56410d706f046cc3e083eb2e148cfdebff2c623128e389f2180d9c417113dZ&oE117.73.243.25Y��E^ 	�)3b62669892107707a5763df7bbd4124014a14c7e1e3a6436384eb1482331f700Z&`]61.148.196.162Y��]^ 	�)68c886931b9467b509119769ff31c474f6b6a6cf026532d07e0c6074cd28c211Z&Y�61.148.196.162Y���   / /                                                                                                                                                                                                                                                                                                     �M�'  G�7from_apiwelife_boss_manager_resources|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bmrid | int(11) unsigned | NO |  | PK | 
 | bmrController | varchar(100) | NO |  | controller名称 | 
 | bmrAction | varchar(100) | NO |  | action名称 | 
 | bmrDescription | varchar(250) | NO |  | action描述 | 
 | bmrCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bmrUpdated | datetime | NO | 0000-00-00 00:00:00 | 修改时间 | 
 | bmrDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | bmrStatus | tinyint(1) unsigned | NO |  | 记录状态(1.正常 9.删除) | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'    1  1                                       �K�S 	I�3showdoc	更新会员的你到期时间
    
**简要描述：** 

- 更新会员的你到期时间

**请求URL：** 
- ` /user/changegradetime `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno | string | 要修改的会员卡号 | 字符串 |  是 |
| cashier_id | int | 操作收银员id | 数字 |  是 |
| limit_time | int | 等级有效时间 | 数字 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result        |  int  |   修改结果 SUCCESS:成功   FAIL:失败    |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         �Q�!  3�Sfrom_apiwelife_biz_selector|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bsid | int(10) unsigned | NO |  | primary key | 
 | bsName | varchar(20) | NO |  | 筛选器名称 | 
 | bid | int(10) unsigned | NO |  | 商家bid | 
 | bsCondition | text | NO |  | 筛选器条件 | 
 | bsTotal |   �   � �                                                                                                                                                                                                                                                                                                                                                                                         �y�%  5�!from_apiwelife_biz_ypos_auth|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | byaAppcode | varchar(10) | NO |  | 硬pos商家appcode | 
 | byaMd5key | varchar(20) | NO |  | 硬pos商家md5key | 
 | bid | int(10) unsigned | NO |  | 商家bid | 
 | byaShopsn | text | NO |  | 硬pos门店与设备对应sn JSON | 
 | byaCreated | datetime | NO |  |  | 
 | byaUpdated | datetime | NO |  |  | 
 | byaDeleted | datetime | NO |  |  | 
 | byaStatus | tinyint(4) | NO | 1 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'    请求URL：** 
- ` /user/editusergrade `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno | string | 要修改的会员卡号 | 字符串 |  是 |
 | grade_id | int | 修改成的会员等级规则id | 数值 |  是 |
| cashier_id | int | 操作收银员id | 数字 |  是 |
| limit_time | int | 等级有效时间 | 数字 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result        |  int  |   修改结果 SUCCESS:成功   FAIL:失败    |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���                                                                                                   �按位与。 | 
 | bBrandType | tinyint(3) unsigned | NO | 0 | 品牌类型 1 单品牌，2多品牌 | 
 | bHeadImg | varchar(1024) | NO |  | 商家头像logo | 
 | bUseSavingType | tinyint(3) unsigned | YES | 0 | 消费储值使用类型：0验证码1密码 | 
 | bCashierNum | tinyint(3) unsigned | NO | 0 | 收银员个数 | 
 | bOnlineCashierNum | tinyint(3) unsigned | NO | 0 | 收银员在线数 | 
 | bActualNoFormats | varchar(64) | YES |  | 实体卡样式格式。例如0,16;2,16 | 
 | bCustomFields | text | NO |  | 自定义项 | 
 | bFirstConsumeRate | tinyint(3) | NO | 0 | 最后一笔充值的首次消费比例（0表示关闭，正常值在1到100之间） | 
 | bSwitchCard | tinyint(3) | YES | 0 | 是否切换微信原生卡 | 
 | bTradeFuncModules | int(10) unsigned | NO | 1 | 交易验证储值，积分，券 | 
 | bQueueSids | text | NO |  | 等位门店列表 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | bIsMini | tinyint(4) | NO | 0 | 是否是mini版 | 
cY��'   �d | NO | 0 | 服务商id | 
 | bActualCardFlag | tinyint(3) unsigned | NO | 0 | 是否开启实体卡 | 
 | bCrmType | tinyint(3) unsigned | NO | 0 | 对接商家类型 1 通卡对接 0 普通商家 | 
 | bCrmId | varchar(64) | NO |  | 对接商家id | 
 | bSummary | text | NO |  | 会员描述 json [{&quot;title&quot;:&quot;title1&quot;,&quot;describe&quot;:&quot;describe1&quot;}] | 
 | bIsOffline | tinyint(3) unsigned | NO | 0 | 商家的上线状态：0：在线，1：已下线。 | 
 | bPayBusiness | int(11) unsigned | NO | 0 | 业务类型 按位与 | 
 | bWxPayInfo | varchar(1000) | NO |  | 微信支付信息，key mchid phone | 
 | bCustomerId | int(10) unsigned | NO | 0 | 阿波罗商户统一平台中的唯一ID。 | 
 | bCustomerAdminId | int(10) unsigned | NO | 0 | 商家客户对接阿波罗后，阿波罗中客户的超管用户ID。 | 
 | bIsX1Biz | tinyint(3) unsigned | NO | 0 | 是否为X1续签商家，0否，1是 | 
 | bFuncModules | int(10) unsigned | NO | 0 | 商家的各功能开关�   �int(4) unsigned | NO |  |  | 
 | bCardNoType | tinyint(3) unsigned | NO |  |  | 
 | bHasUserInfo | tinyint(3) unsigned | NO |  |  | 
 | bUserLevelState | tinyint(3) unsigned | NO |  |  | 
 | bGetUCNoType | tinyint(3) unsigned | NO |  |  | 
 | bMpBid | int(10) unsigned | NO |  |  | 
 | bUserInfoType | tinyint(3) unsigned | NO |  |  | 
 | bWxAccountType | tinyint(11) unsigned | NO |  | ΢ | 
 | bWxStatus | tinyint(3) unsigned | NO | 0 | 微信账号状态 | 
 | bCustomerUin | int(10) unsigned | NO |  |  | 
 | bStarted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bEnded | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bCrmVersion | tinyint(3) unsigned | NO |  | CRM | 
 | bCreator | int(10) unsigned | NO |  |  | 
 | bCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | bStatus | tinyint(3) unsigned | NO | 0 |  | 
 | bWxToken | char(32) | NO |  | mp Tokenֵ | 
 | paServiceId | smallint(6) unsigne   �  |  | 
 | bVerifyType | tinyint(3) unsigned | NO |  |  | 
 | bCodeShowType | tinyint(3) unsigned | NO |  |  | 
 | bAddress | varchar(1024) | NO |  |  | 
 | bSourceLogo | text | NO |  |  | 
 | bStyleType | tinyint(3) unsigned | NO |  | 1 | 
 | bCardStyle | tinyint(3) unsigned | NO |  |  | 
 | bDescTitle | varchar(502) | NO |  | ˵ | 
 | bDescContent | varchar(1024) | NO |  | ˵ | 
 | wxid | varchar(32) | NO |  | ΢ | 
 | wxOriginid | varchar(32) | NO |  | ΢ | 
 | bAppid | varchar(32) | NO |  | ΢ | 
 | bSecret | varchar(32) | NO |  | ΢ | 
 | paid | int(10) unsigned | NO |  | Paid | 
 | cid | int(10) unsigned | NO |  |  | 
 | bLopid | int(10) unsigned | NO |  |  | 
 | bPosType | int(10) unsigned | NO |  |  | 
 | bMainTypeId | int(10) unsigned | NO |  | һ | 
 | bSubTypeId | int(10) unsigned | NO |  |  | 
 | bForwardUin | varchar(32) | NO |  |  | 
 | bUserLevels | text | NO |  |  | 
 | bShowUcNo | tinyint(3) unsigned | NO |  |  | 
 | bAppCardWeight | int(10) unsigned | NO |  |  | 
 | bAppCardOnline | tiny    提供） | 
 | pAppkey | varchar(64) | NO |  | Appkey | 
 | pConf | text | NO |  | 插件配置项（json,[{参数；别名；数据类型[；单选、复选列表项]；描述}]） | 
 | pDesc | varchar(2048) | NO |  | 插件详情 | 
 | pHeadPic | varchar(1024) | NO |  | 封面图片 | 
 | pDescPic | varchar(2048) | NO |  | 详情图片(json，最多10张） | 
 | pAuth | varchar(256) | NO |  | 插件调用接口权限（json，['A','B']） | 
 | pCreator | int(11) | NO | 0 | 创建者ID | 
 | pCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | pUpdator | int(11) | NO | 0 | 修改者ID | 
 | pUpdated | datetime | NO | 1970-01-01 00:00:00 | 更新时间 | 
 | pDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | pStatus | tinyint(4) | NO | 1 | 状态 | 
 | pType | int(11) | NO | 0 | 类型 | 
 | pReleaseDate | date | NO | 1970-01-01 | 发行日期 | 
 | pHighlights | varchar(2048) | NO |  | 亮点 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��-   �     },
        {
          &quot;credit&quot;: 20,
          &quot;gift&quot;: &quot;一盘牛肉&quot;
        }
      ]
    },
    &quot;expired&quot;: &quot;0000-00-00&quot;,
    &quot;description&quot;: &quot;test&quot;
  }
}
```

 **返回参数说明** 
 
 | 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| gift              |  json  |   奖励规则    | JSON       |
| consume             |  json  |   消费使用规则    |  JSON       |
| expired             |  date  |   积分到期日期    |    0000-00-00永久有效     |
| description             |  string  |   积分限制于说明    |  积分最多使用上限10000       |
**gift奖励规则**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| price              |  int  |   消费金额    | 1       |
| credit             |  int  |   奖励积分数量    |  1       |
| gift_ran    ** 
- ` /credit/exchange `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno  | int | 会员卡号 | 数字 |  是 |
 | cashier_id | int | 收银员id | 数字 |  是 |
 | sub_credit | int | 扣减的积分数量 | 数字 |  是 |
 | desc | string | 兑换礼品描述 | 字符串 |  是 |
 | biz_id | string | 兑换业务号 | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result             |  string  |   兑换结果    |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���                                                                                                            ge      |  int  |   奖励范围 1.现金消费  2.现金和储值消费    |  1       |
**consume消费使用规则**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| credit_consume_openflag              |  int  |   消费使用积分是否开启  1.开启   2.关闭    | 1       |
| credit_gift_openflag             |  int  |   积分换礼是否开启 1.开启  2.关闭    |  1       |
| credit_gift_desc      |  sting  |   积分换礼描述   |  礼品描述     |
| credit_gift_rule      |  json  |   积分换礼规则   |   JSON     |
**credit_gift_rule积分换礼规则**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| credit              |  int  |   换礼需要使用的积分    | 10       |
| gift             |  string  |   礼品描述    |  1杯可乐     |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��d    f  f                                                                                            �
�h 	+�Oshowdoc	券模板列表
    
**简要描述：** 

- 获取商家定义的券模板

**请求URL：** 
- ` /coupon/list `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | page  | int | 页数 | 数字 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: [
    {
      &quot;template_id&quot;: &quot;2000002&quot;,
      &quot;name&quot;: &quot;yiyi礼品券&quot;,
      &quot;summary&quot;: &quot;全部门店充值1000送的券&quot;,
      &quot;type&quot;: 2,
      &quot;valid_data&quot;: &quot;relative,36,1&quot;,
      &quot;creator&quot;: &quot;管理员&quot;,
      &quot;shop_list&quot;: &quot;ALL&quot;,
      &quot;products&quot;:[1342, 3243],
      &quot;created&quot;: &quot;2016-06-16&quot;
    },
    {
      &quot;tem   i   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               �[� 	1�ekshowdoc	消费记录详情eNqdll9T20YQwN/1Ke4p0zDxxPI/sPIVMtNM2zzbiq24moJEZbmZtGQGyDiGgONQTOyQhgAxhGkT20yMIdjgL6M7SU/5ClnpJEu2BZ32GHynu93f7e6t9sQgaMzUlN5cNA6XSKViDNpf+9tTU4hhQoi8OzBa+2S9hJvb5GSJtDu4ckq6K0bni9Fs44sto3VInhYZABitU3K8fP+Hu452CKXR7Yws5Qtzwu3fROERSjP2TlSQvPqC+xVbFkTvff/jT8ii4Moy2RoagBYQ/lQjzRP8sgxjpB/38M4asoZGq0PqL+wh2e0DC   �   �**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | deal_id | int | 消费流水号 | string |  是 |

 **返回示例**

``` 
{
    &quot;errcode&quot;: 0,
    &quot;errmsg&quot;: &quot;OK&quot;,
    &quot;res&quot;: {
        &quot;deal_id&quot;: &quot;1567451704428804&quot;,
        &quot;cno&quot;: &quot;ssssssssssssssss&quot;,
        &quot;sid&quot;: &quot;1429830612&quot;,
        &quot;total_fee&quot;: &quot;2011000&quot;,
        &quot;fee&quot;: &quot;0&quot;,
        &quot;stored_pay&quot;: &quot;2011000&quot;,
        &quot;stored_sale_pay&quot;: &quot;2010000&quot;,
        &quot;cash_coupon_pay&quot;: 0,
        &quot;gift_coupon_pay&quot;: &quot;0&quot;,
        &quot;credit_num&quot;: &quot;0&quot;,
        &quot;credit_pay&quot;: &quot;0&quot;,
        &quot;credit_award&quot;: &quot;2011&quot;,
        &quot;type&quot;: &quot;2&quot;,
        &quot;pay_type&quot;: &quot;2&quot;,
        &quot;pay_time&quot;: &quot;2017-05-15    �  �                                                                                                                                                                      �L�  3�Ifrom_apimigrating_user_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | uid | bigint(20) unsigned | NO |  | �û�id | 
 | usTotalCharge | int(11) unsigned | NO | 0 | ��ֵ�ܽ�ֻ�������� | 
 | usSaving | int(11) unsigned | NO | 0 | �˻���� | 
 | usChargeCount | int(11) unsigned | NO | 0 | ��ֵ���� | 
 | usExpiredCharge | text | NO |  | �������ڵ���Ѽ�¼ | 
 | usCreated | datetime | NO | 0000-00-00 00:00:00 | ����ʱ�� | 
 | usUpdated | datetime | NO | 0000-00-00 00:00:00 | ����ʱ�� | 
 | usDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ��ʱ�� | 
 | usStatus | tinyint(3) | NO |  | ״̬ | 
 | bid | int(11) unsigned | NO | 0 | bid | 
cY��%    �  �                                                                                                                                                                                                             �%�  A�mfrom_apimigrating_user_credit_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | uid | bigint(20) unsigned | NO | 0 | 用户id | 
 | ucTotalCredit | int(11) unsigned | NO | 0 | 用户获得总积分（只增不减） | 
 | ucSaving | int(11) unsigned | NO | 0 | 用户当前积分剩余 | 
 | ucCreditCount | int(11) unsigned | NO | 0 | 用户获得积分次数 | 
 | ucYearSaving | text | NO |  | 用户每年的积分账户详细信息JSON | 
 | ucExpiredCredit | text | NO |  | 积分过期提醒JSON | 
 | ucCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ucUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ucDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ucStatus | tinyint(4) | NO |  |  | 
cY��%    bid | int(11) unsigned | NO | 0 | 商户id | 
 | sid | int(11) unsigned | NO | 0 | 门店id | 
 | tcCardNo | char(20) | NO | 0 | 会员卡号 | 
 | tcPhone | char(11) | YES |  | 卡号/手机号 | 
 | tcCredit | int(11) unsigned | NO | 0 | 本次操作积分数量 | 
 | tcRuleId | int(11) unsigned | NO | 0 | 积分规则id | 
 | tcRuleType | varchar(20) | NO |  | 规则类型 | 
 | tcOperaterId | int(11) unsigned | NO |  | 操作员id | 
 | tcSaving | int(11) unsigned | NO |  | 本次积分变更后剩余积分 | 
 | tcTradeType | tinyint(4) unsigned | NO | 0 | 积分记录类型 | 
 | tcTradeRecord | text | YES |  | 消费积分对应消费记录 | 
 | tcDescription | text | NO |  | 本次操作备注 | 
 | tcCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tcUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tcDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tcStatus | tinyint(4) | NO |  |  | 
 | grid | int(11) unsigned | NO | 0 | 冗余用户等级ID（默认0为普通等级） | 
cY��%    � � �                                                                                                                                                                                ��  C�7from_apimigrating_trade_credit_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | tcId | bigint(20) unsigned | NO | 0 | 流水号 | 
 | uid | bigint(20) unsigned | NO | 0 | 用户id | 
 |    ���  E�Yfrom_apimigrating_trade_charges_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | tcId | bigint(64) unsigned | NO |  | ���׺ţ���ɷ�����time().$sid.rander()�� | 
 | uid | bigint(20) unsigned | NO |  | �û�id | 
 | bid | varchar(16) | NO |  | �̼�id | 
 | sid | varchar(16) | NO |  | �ŵ�id | 
 | tcPhone | varchar(11) | NO |  | �ֻ�� | 
 | tcCharge | int(11) unsigned | NO |  | ��ֵ��� | 
 | tcSale | i   �   � 16:53:52&quot;,
        &quot;cashier_id&quot;: &quot;1138697522&quot;,
        &quot;remark&quot;: &quot;&quot;,
        &quot;biz_id&quot;: &quot;&quot;,
        &quot;status&quot;: &quot;2&quot;
    }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| deal_id          |  string  |   消费流水   |  1535178031641110       |
| cno              |  int  |   消费用户卡号   |  1265693       |
| sid              |  int  |   消费门店id   |   3196764329      |
| total_fee    |  int  |   消费总金额(单位:分)  |   14000      |
| fee              |  int  |   实收金额(单位:分)   |   10000      |
| stored_pay     |  int  |   使用储值支付金额(单位:分)    |   2000      |
| stored_sale_pay     |  int  |   使用实际储值支付金额(单位:分)    |   2000      |
| cash_coupon_pay   |  int  |   使用券抵扣金额(单位:分)   |   1000      |
| gift_counpon_pay       archar(64) | NO |  | 卡类别名称 | 
 | ccCardType | tinyint(3) unsigned | NO |  | 卡面类别，1：系统自带，2：自定义。 | 
 | ccCardFace | text | NO |  | 卡面定义。 | 
 | ccCardStyle | tinyint(3) unsigned | NO |  | 卡面所选样式 | 
 | ccChargeFlag | tinyint(1) unsigned | NO | 0 | 储值开关 | 
 | ccCreditFlag | tinyint(1) unsigned | NO | 0 | 积分开关 | 
 | ccCreditPrice | int(10) unsigned | NO | 0 | 当前卡类型累计1积分需要消息的金额（元）。 | 
 | ccMemberDiscount | tinyint(3) unsigned | NO |  | 会员价折扣。 | 
 | ccMemberDiscountSids | text | NO |  | 会员价折扣适用门店。 | 
 | ccPrivileges | varchar(1024) | NO |  | 会员特权 | 
 | ccCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | ccSelfPayDiscount | tinyint(3) unsigned | NO | 0 | 自助买单折扣 | 
cY��     |  int  |   使用礼品券抵扣金额(单位:分)   |   1000      |
| credit_num    |  int  |   使用积分数量(单位:个)   |   0       |
| credit_pay    |  int  |   使用积分抵扣金额(单位:分)   |   0      |
| credit_award    |  int  |   奖励积分数量(单位:个)   |   100      |
| type              |  int  |   交易类型   |   1:充值  2:消费 3:撤销消费  4:被撤销消费  5:系统回收  6:撤销充值 7:被撤销充值  8:手工调账减少充值  9:手工调账减少积分  10:积分换礼      |
| pay_type      |  int  |   消费支付类型   |   1:现金   2:银行卡   3:微信  4:支付宝   6:手工调整      |
| pay_time       |  date  |   交易时间   |         |
| cashier_id   | int | 收银员id | |
| remark     |  string  |   备注   |         |
| biz_id    |  int  |   第三方交易号  |         |
| status    |  int  |   交易状态  1：预消费  2：成功消费  |         |


 **备注** 

- 更多返回错误代码请看错误代码描述


Y��    1) unsigned | NO | 0 | 卡号前缀7为随机商户id | 
 | acbBoundNum | int(11) unsigned | NO | 0 | 绑定数量 | 
 | acbOperatorId | int(11) unsigned | NO | 0 | 操作者id | 
 | acbCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | acbUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | acbDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | acbStatus | tinyint(3) unsigned | NO | 0 | 状态 | 
 | acbCategory | varchar(160) | NO |  | 实体卡分类 | 
 | acbCharge | int(11) unsigned | NO | 0 | 实体卡储值 | 
 | acbCredit | int(11) unsigned | NO | 0 | 实体卡积分 | 
 | acbCoupon | text | NO |  | 实体卡券json | 
 | acbFuncModules | tinyint(3) unsigned | NO | 0 | 实体卡批次功能开关 | 
 | acbShops | text | NO |  | 批次的卡限制使用门店 | 
 | acbSalePrice | int(10) unsigned | NO | 0 | 实体卡售价 | 
 | ccid | int(11) unsigned | NO | 0 | 关联卡类别 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �t�i 	%�)showdoc	券码核销
    
**简要描述：** 

- 纸制券码查询或核销

**请求URL：** 
- ` /coupon/verification `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
| coupon_code  | string | 券码 | 字符串 |  是 |
| is_verification  | boolean | 是否核   �    ��口设置是否开发票，如果不调用此接口设置，默认为不开发票

**请求URL：** 
- ` /charge/receipt `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
  | biz_id | string | 储值业务号，收银方保证唯一| 字符串 |  是 |
  | has_receipt | int | 是否开发票  1:是   2:否 | 数字 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
     &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result              |  string  |   设置成功与否 SUCCESS:成功  FAIL:失败  |  SUCCESS       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��                                                                                                  �  �                                                                                                                                                              �T�	  C�Ifrom_apimigrating_user_savings_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | uid | bigint(20) unsigned | NO |  | �û�id | 
 | usTotalCharge | int(11) unsigned | NO | 0 | ��ֵ�ܽ�ֻ�������� | 
 | usSaving | int(11) unsigned | NO | 0 | �˻���� | 
 | usChargeCount | int(11) unsigned | NO | 0 | ��ֵ���� | 
 | usExpiredCharge | text | NO |  | �������ڵ���Ѽ�¼ | 
 | usCreated | datetime | NO | 0000-00-00 00:00:00 | ����ʱ�� | 
 | usUpdated | datetime | NO | 0000-00-00 00:00:00 | ����ʱ�� | 
 | usDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ��ʱ�� | 
 | usStatus | tinyint(3) | NO |  | ״̬ | 
 | bid | int(11) unsigned | NO | 0 | bid | 
cY��%   � �                                                                                                                                                                                                                                                                                                                                                                                            �j�|  9�from_apidpods_welife_users_day|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO | 0 | primary key | 
 | uid | bigint(20) unsigned | NO | 0 |  | 
 | uType | tinyint(3) unsigned | NO | 0 |  | 
 | uName | varchar(128) | NO |  |  | 
 | uPhone | char(11) | NO |  |  | 
 | uAvatar | varchar(1028) | NO |  | ͷ | 
 | uGender | tinyint(3) unsigned | NO | 0 |  | 
 | uBirthDay | char(10) | NO |  |  | 
 | uCid | int(11) unsigned | NO | 0 |  | 
 | bid | int(11) unsigned | NO | 0 |  | 
 | qrid | varchar(32) | NO |  | ɨ | 
 | uNo | varchar(64) | NO |  |  | 
   Y    d | NO |  | primary key | 
 | baId | varchar(32) | NO |  | 对应商家账号的key | 
 | bid | int(11) unsigned | NO | 0 | bid | 
 | sid | int(11) unsigned | NO | 0 | sid | 
 | balHandler | int(11) unsigned | NO | 0 | 充值(消费)操作者id | 
 | baType | tinyint(3) unsigned | NO | 0 | 财务类型 1 短信储值 | 
 | balTradeType | tinyint(3) unsigned | NO | 0 | 财务操作类型 1充值 2扣款消费 | 
 | balTotalAmount | int(11) unsigned | NO | 0 | 当前储值总金额分为单位 | 
 | balBalanceAmount | int(11) unsigned | NO | 0 | 当前账户余额分为单位 | 
 | balTradeMoney | int(11) unsigned | NO | 0 | 本次充值（扣款）等交易金额分为单位 | 
 | balCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | balUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | balDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | balStatus | tinyint(3) unsigned | NO | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&   ˺�的流水] |  否 |

 **返回示例**

``` 
{
    &quot;errcode&quot;: 0,
    &quot;errmsg&quot;: &quot;OK&quot;,
    &quot;res&quot;: [
        {
            &quot;charge_id&quot;: &quot;1564554998581439&quot;,
            &quot;cno&quot;: &quot;1265855&quot;,
            &quot;sid&quot;: &quot;4101315464&quot;,
            &quot;total_fee&quot;: &quot;5000&quot;,
            &quot;fee&quot;: &quot;5000&quot;,
            &quot;award_fee&quot;: &quot;0&quot;,
            &quot;type&quot;: &quot;6&quot;,
            &quot;pay_time&quot;: &quot;2017-04-13 17:31:58&quot;,
            &quot;pay_type&quot;: &quot;1&quot;,
            &quot;has_receipt&quot;: &quot;2&quot;,
            &quot;cashier_id&quot;: &quot;1218054703&quot;,
            &quot;remark&quot;: &quot;&quot;,
            &quot;grade&quot;: &quot;1003299&quot;,
            &quot;grade_name&quot;: &quot;第三等级&quot;,
            &quot;award_coupons&quot;: [
                {
                    &quot;coupon_id&quot;: &quot;2116383&quo    lljPChq/V20wCxwIWgwxXkdnQuhBdrBrLVBVuBnU2IWRqKkwi/1bugszORVRZRy9k71FigxCJwYVPGbHb1xrl2ugQdMOp1G4N4fjBXOG78WZPWOoCiyksrIWYE+cyh8y7ec5VXeXaBq7kpBzLoLtGdpd2tUKi8oEj8njIlG2HgM/oI0JqXxy47+uUfWl4PEc4pcmPdMiaDRZUXIpVRxYv9YNDGTiLGJZBByls+rqVk5J0oBqmG/xhPG+oeo+qJNc4MevJ0e/uzwNzipYarYD8NscZ/tpp1dwukNkyWExvphnlzVQHOYPv7NnYSxt/KnE11l49E4Oz0TjrIQJ5YN+2AZSUbjnlhZ6SPp1SOycorLe1ZuUl4kEU8koz5M3m9PMMasHeHzmi1nTUbZZGI6EYtGkh5FlVVw7aEgBBPIYs8sbZj7b7/D5S3toszhlWc3qQAbC4fDHshBBJuDmzuk2g0iUVR4BJVXZUXIpub5xxMg7WIAscHLR3ixT6otrVcPhNqykSBonp8VriM3d8zXxf/Dz/D5n6EOFOZlyeEH0FfOyPMTsvr+2kh4zJz4ULWYkgcNoOqNPt5c+q/sDERDVFNSYe4K6ocW6MKraJYqLkw7+9uFjSQ0RV1tIEVdb92kafwjXslOZNLBK/z8+F+MY/2Oqo/nr8lM7bxB6psjdYTlcLEI5w8nzNG3AEU58mfDrC46jyjGGfv/jE7FOSiyeu8dlDBIdYQSjorDmvY0XPoMR1bX8OmB0X5qdA5xqYLbG+5aMmCNOm15xzn+l/fh7D1P4QBSnrcBL7Od0GO+6i8giBtWOnPmZtfYW4eqY9UKDl82tcGe5SvVw823yHbLNYxsdcb2hmrvhRiuPsEfY1LrmrXOSG123xtRUFJOlXKuZygWm128UbevbEtMEeZ45Zeg2osbJfL5aIL7QPzdqdj+QOgfP2pnq/BZQm2yy6tfz7qHKND9NnrTwY1tejWZ1ddGC0LxXt9dgu8b/a81/wz9qmIY5hu31s2+Y��b    �  �                                                                                                                                                                                         �9�  3�#from_apiwelife_actual_cards|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | acNo | varchar(64) | NO |  |  | 
 | acbId | int(11) unsigned | NO | 0 | 实体卡号批次id | 
 | bid | int(11) unsigned | NO | 0 | 商户id | 
 | sid | int(11) unsigned | NO | 0 | 门店sid | 
 | uid | bigint(20) unsigned | NO | 0 | 用户id | 
 | acBoundTime | datetime | NO | 0000-00-00 00:00:00 | 绑定时间 | 
 | acCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | acUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | acDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | acStatus | tinyint(3) unsigned | NO | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&     | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | new_user_weixin | int(10) | NO |  | 新增微信关注会员 | 
 | new_unregistered_user | int(10) | NO |  | 新增取消关注会员量 | 
 | new_user_actual | int(10) | NO |  | 新增实体卡会员 | 
 | all_user | int(10) | NO |  | 累计会员量 | 
 | new_user_consomer | int(10) | NO |  | 新增消费会员量 | 
 | new_user_charger | int(10) | NO |  | 新增储值会员量 | 
 | all_user_consomer | int(10) | NO |  | 累计消费会员量 | 
 | all_user_charger | int(10) | NO |  | 累计储值会员量 | 
 | all_unregistered_user | int(10) | NO |  | 取消关注会员总量 | 
 | new_cancel_user_actual | int(25) | YES | 0 | 实体卡取消关注数量 | 
 | new_first_user_weixin | int(25) | YES | 0 | 微信会员首次关注数量 | 
 | new_first_unregistered_user | int(25) | YES | 0 | 微信会员首次取消关注数量 | 
cY��   �t;,
                    &quot;name&quot;: &quot;29元cch储值代金券&quot;,
                    &quot;amount&quot;: &quot;29&quot;,
                    &quot;number&quot;: &quot;1&quot;
                }
            ],
            &quot;biz_id&quot;: &quot;3025&quot;
        },
        {
            &quot;charge_id&quot;: &quot;1564554797032458&quot;,
            &quot;cno&quot;: &quot;1265855&quot;,
            &quot;sid&quot;: &quot;4101315464&quot;,
            &quot;total_fee&quot;: &quot;5000&quot;,
            &quot;fee&quot;: &quot;5000&quot;,
            &quot;award_fee&quot;: &quot;0&quot;,
            &quot;type&quot;: &quot;7&quot;,
            &quot;pay_time&quot;: &quot;2017-04-13 17:28:46&quot;,
            &quot;pay_type&quot;: &quot;1&quot;,
            &quot;has_receipt&quot;: &quot;2&quot;,
            &quot;cashier_id&quot;: &quot;1218054703&quot;,
            &quot;remark&quot;: &quot;test&quot;,
            &quot;grade&quot;: &quot;1003299&quot;,
            &quot;grade_name&quot;:   � &quot;第三等级&quot;,
            &quot;award_coupons&quot;: [
                {
                    &quot;coupon_id&quot;: &quot;2116383&quot;,
                    &quot;name&quot;: &quot;29元cch储值代金券&quot;,
                    &quot;amount&quot;: &quot;29&quot;,
                    &quot;number&quot;: &quot;1&quot;
                }
            ],
            &quot;biz_id&quot;: &quot;3025&quot;
        },
        {
            &quot;charge_id&quot;: &quot;1564552040453132&quot;,
            &quot;cno&quot;: &quot;1265855&quot;,
            &quot;sid&quot;: &quot;4101315464&quot;,
            &quot;total_fee&quot;: &quot;5000&quot;,
            &quot;fee&quot;: &quot;5000&quot;,
            &quot;award_fee&quot;: &quot;0&quot;,
            &quot;type&quot;: &quot;7&quot;,
            &quot;pay_time&quot;: &quot;2017-04-13 16:44:57&quot;,
            &quot;pay_type&quot;: &quot;1&quot;,
            &quot;has_receipt&quot;: &quot;2&quot;,
            &quot;cashier_id&quot;: &quot;121805470   Q Q                                                                                                                                                                                                                                                                                                                                       �+�  +�from_apiwelife_biz_need|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | nid | int(11) unsigned | NO |  | primary key | 
 | paid | int(10) unsigned | NO |  | 代理商id | 
 | bnTitle | varchar(64) | NO |  | 标题 | 
 | bnContent | text | NO |  | 需求正文 | 
 | bnStatus | tinyint(3) | NO | 1 | 需求状态 | 
 | bnSupport | int(10) unsigned | NO | 0 | 支持数 | 
 | bnMsg | varchar(64) | NO |  | 处理结果 | 
 | bnCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bnUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'    销 | true:核销  false:不核销只查询[默认] |  否 |
| repeal  | boolean | 撤销 | true:撤销  false:不撤销[默认]   注：只有已核销的券才可以撤销|  否 |

 **返回示例**

``` 

```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| batch_id             |  string  |   券码批次id    |  123       |
| coupon_code     |  string  |   券码    |  13123223       |
| coupon_name     |  string  |   券名称    |  10元       |
| coupon_amount     |  int  |   券面值，单位：元    |  10       |
| coupon_status  |  int  |   券码状态    |  0：未验证   1：已验证       |
| verification_result  |  string  |   券码核销结果，进行核销时才会返回    |  SUCCESS      |
| repeal_result  |  string  |   券码撤销核销结果，进行撤销核销时才会返回    | SUCCESS      |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��i    �  �                                                                                                                                                                                                                                     ��  /�?from_apiwelife_biz_extras|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  | ???ID | 
 | beCompanyName | varchar(128) | NO |  | ?????? | 
 | beContactUser | varchar(128) | NO |  | ????? | 
 | beContactPhone | varchar(12) | NO |  | ????????? | 
 | beContactPosition | varchar(32) | NO |  | ???????? | 
 | beInvoiceTitle | varchar(64) | NO |  | ????? | 
 | beBank | varchar(64) | NO |  | ???????? | 
 | beAccountNumber | varchar(19) | NO | 0 | ??????? | 
 | beBusinessLicense | mediumblob | YES |  | ????? | 
 | beIDCard | mediumblob | YES |  | ???? | 
 | beTradeType | int(10) unsigned | NO |  | ??????? | 
 | beAuditLogs | text | NO |  | ?????? | 
 | beCrea   �   + +                                                                                                                                                                                                                                                                                                 �Q�  +�[from_apiwelife_biz_auth|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  | primary key | 
 | baAppid | varchar(24) | NO |  | appid | 
 | baAppkey | varchar(32) | NO |  | appkey | 
 | bid | int(10) unsigned | NO |  | bid | 
 | baAuth | text | NO |  | 权限 | 
 | baCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | baUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | baDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | baStatus | tinyint(1) unsigned | NO | 1 | 状态 | 
 | baFuncModules | int(10) unsigned | NO | 0 | 商家接口各功能开关，按位与 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'   �3&quot;,
            &quot;remark&quot;: &quot;test&quot;,
            &quot;grade&quot;: &quot;1003299&quot;,
            &quot;grade_name&quot;: &quot;第三等级&quot;,
            &quot;award_coupons&quot;: [
                {
                    &quot;coupon_id&quot;: &quot;2116383&quot;,
                    &quot;name&quot;: &quot;29元cch储值代金券&quot;,
                    &quot;amount&quot;: &quot;29&quot;,
                    &quot;number&quot;: &quot;1&quot;
                }
            ],
            &quot;biz_id&quot;: &quot;3024&quot;
        }
    ]
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| charge_id              |  string  |   储值流水   |  1535178031641110       |
| cno              |  int  |   储值用户卡号   |  1265693       |
| sid              |  int  |   储值门店id   |   3196764329      |
| total_fee    |  int  |   充值金额(单位:分)  |    ��实体卡 | 
 | bCrmType | tinyint(3) unsigned | NO | 0 | 对接商家类型 1 通卡对接 0 普通商家 | 
 | bCrmId | varchar(64) | NO |  | 对接商家id | 
 | bSummary | text | NO |  | 会员描述 json [{&quot;title&quot;:&quot;title1&quot;,&quot;describe&quot;:&quot;describe1&quot;}] | 
 | bIsOffline | tinyint(1) unsigned | NO | 0 | 商家的上线状态：0：在线，1：已下线。 | 
 | bPayBusiness | int(11) unsigned | NO | 0 | 业务类型 按位与 | 
 | bWxPayInfo | varchar(256) | NO |  | 微信支付信息，key mchid phone | 
 | bCustomerId | int(10) unsigned | NO | 0 | 阿波罗商户统一平台中的唯一ID。 | 
 | bCustomerAdminId | int(10) unsigned | NO | 0 | 商家客户对接阿波罗后，阿波罗中客户的超管用户ID。 | 
 | bIsX1Biz | tinyint(3) unsigned | NO | 0 | 是否为X1续签商家，0否，1是 | 
 | bFuncModules | int(10) unsigned | NO | 0 | 商家的各功能开关，按位与。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'   �erInfo | tinyint(3) unsigned | NO |  |  | 
 | bUserLevelState | tinyint(3) unsigned | NO |  |  | 
 | bGetUCNoType | tinyint(3) unsigned | NO |  |  | 
 | bMpBid | int(10) unsigned | NO |  |  | 
 | bUserInfoType | tinyint(3) unsigned | NO |  |  | 
 | bWxAccountType | tinyint(11) unsigned | NO |  | ΢ | 
 | bWxStatus | tinyint(3) unsigned | NO | 0 | 微信账号状态 | 
 | bCustomerUin | int(10) unsigned | NO |  |  | 
 | bStarted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bEnded | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bCrmVersion | tinyint(3) unsigned | NO |  | CRM | 
 | bCreator | int(10) unsigned | NO |  |  | 
 | bCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | bStatus | tinyint(1) unsigned | NO | 0 |  | 
 | bWxToken | char(32) | NO |  | mp Tokenֵ | 
 | paServiceId | smallint(6) unsigned | NO | 0 | 服务商id | 
 | bActualCardFlag | tinyint(3) unsigned | NO | 0 | 是否开�   �nsigned | NO |  |  | 
 | bAddress | varchar(1024) | NO |  |  | 
 | bSourceLogo | text | NO |  |  | 
 | bStyleType | tinyint(3) unsigned | NO |  | 1 | 
 | bCardStyle | tinyint(3) unsigned | NO |  |  | 
 | bDescTitle | varchar(502) | NO |  | ˵ | 
 | bDescContent | varchar(1024) | NO |  | ˵ | 
 | wxid | varchar(32) | NO |  | ΢ | 
 | wxOriginid | varchar(32) | NO |  | ΢ | 
 | bAppid | varchar(32) | NO |  | ΢ | 
 | bSecret | varchar(32) | NO |  | ΢ | 
 | paid | int(10) unsigned | NO |  | Paid | 
 | cid | int(10) unsigned | NO |  |  | 
 | bLopid | int(10) unsigned | NO |  |  | 
 | bPosType | int(10) unsigned | NO |  |  | 
 | bMainTypeId | int(10) unsigned | NO |  | һ | 
 | bSubTypeId | int(10) unsigned | NO |  |  | 
 | bForwardUin | varchar(32) | NO |  |  | 
 | bUserLevels | text | NO |  |  | 
 | bShowUcNo | tinyint(3) unsigned | NO |  |  | 
 | bAppCardWeight | int(10) unsigned | NO |  |  | 
 | bAppCardOnline | tinyint(4) unsigned | NO |  |  | 
 | bCardNoType | tinyint(3) unsigned | NO |  |  | 
 | bHasUs    Y  Y                                                                               �#�]  7�sfrom_apiwedatas_user_stat_par|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | new_user_weixin | int(10) | NO |  | 新增微信关注会员 | 
 | new_unregistered_user | int(10) | NO |  | 新增取消关注会员量 | 
 | new_user_actual | int(10) | NO |  | 新增实体卡会员 | 
 | all_user | int(10) | NO |  | 累计会员量 | 
 | new_user_consomer | int(10) | NO |  | 新增消费会员量 | 
 | new_user_charger | int(10) | NO |  | 新增储值会员量 | 
 | all_user_consomer | int(10) | NO |  | 累计消费会员量 | 
 | all_user_charger | int(10) | NO |  | 累计储值会员量 | 
 | all_unregistered_user | int(10) | NO |  | 取消关注会员总量 | 
cY��       12000      |
| fee              |  int  |   实收金额(单位:分)   |   10000      |
| award_fee     |  int  |   奖励金额(单位:分)    |   2000      |
| award_coupons   |  array  |   奖励券   |   详情见【奖励券】      |
| type              |  int  |   交易类型   |   1:储值   6:撤销储值   7:被撤销储值   8:手工调整减少储值      |
| pay_time       |  date  |   交易时间   |         |
| pay_type      |  int  |   储值支付类型  |  1:现金  2:银行卡   3:微信  4:支付宝  5:店内微信支付  6:手工调整   |
| has_receipt    |  int  |   是否开票   |   1:开票    2:未开票    0:未开票      |
| cashier_id   |  int  |   操作人Id   |         |
| remark     |  string  |   备注   |         |
| grade     |  int  |   用户等级id   |         |
| grade_name     |  string  |   用户等级名称   |         |
| biz_id     |  string  |   第三方业务号   |         |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��    门店id | 
 | boPayWay | varchar(20) | NO |  | 支付方式 | 
 | boPayMoney | int(11) unsigned | NO | 0 | 支付金额，单位为分 | 
 | boPayStatus | tinyint(1) unsigned | NO | 0 | 支付状态 1未支付2支付成功3支付失败 | 
 | boHasReceipt | tinyint(3) unsigned | NO | 0 | 是否开发票 | 
 | boType | tinyint(3) unsigned | NO | 0 | 订单类型1短信充值 | 
 | boPayTime | datetime | NO | 0000-00-00 00:00:00 | 支付完成时间 | 
 | boAttach | text | NO |  | 附加信息 | 
 | boDescribe | text | NO |  | 订单描述 | 
 | boPayNo | varchar(32) | NO |  | 第三方交易号 | 
 | boCreator | int(11) unsigned | NO | 0 | 订单创建者 | 
 | boPayAccount | varchar(100) | NO |  | 第三方账号 | 
 | boCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | boUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | boDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | boStatus | tinyint(1) unsigned | NO | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'    ssType | tinyint(3) unsigned | NO | 0 | 业务类型 1 储值  2 积分 3 优惠券 | 
 | tlAdjustType | tinyint(3) unsigned | NO | 0 | 调整类型 1 增加 2 扣减 | 
 | tlMoney | int(11) unsigned | NO | 0 | 调整金额 | 
 | tlCredit | int(11) unsigned | NO | 0 | 调整积分 | 
 | tlCouponId | int(11) unsigned | NO | 0 | 调整券id | 
 | tlCouponNum | int(11) unsigned | NO | 0 | 调整券数量 | 
 | tlRemark | varchar(256) | NO |  | 备注 | 
 | tlOperaterId | int(11) unsigned | YES | 0 | 操作员id | 
 | tlCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tlUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tlDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | tlStatus | tinyint(3) unsigned | NO | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 点评更新时间 | 
 | IsDeleted | tinyint(3) unsigned | NO | 0 | 点评删除状态 | 
 | tlAttach | text | NO |  | 附加信息 | 
 | grid | int(11) unsigned | NO | 0 | 冗余用户等级ID（默认0为普通等级） | 
cY��%    2Ywf3QM3nLqV7weXgFhT+XimMHJZSB9exN/EXNK/nD1e9J1R7zvubgwBxS8PSI34sygaYPkAxyMuIvAhge9BkZNGxNzPboLu1jdTv/u+su7WBVnKma80I3rD/DicVgstCbhhGd+70q8csHyQD4ZiXDR6CTngIjGAwXfDh3hQlNh/Iwcf+NL+DTGI8X0rQTQajPYpA1xPrz2VoDf0/xaDGP8pS0GIF9jYpygFiQSemsLjTaXcxCsTeOakD21w2fp1wc3iSBDuSi+7/kJ1k4gj2UIm703jLzvnsSfT9Il+7S05HBcJcRHa8KHvuXocksnQ9j1tq+bYwtFDBD0h6OcI5zHCecH2zzpT6A3rWGG29at1cg5bQutUEUCeu3Wg6HZpO1hDwJE3ADmfS2WGqTt6sqLbXzrKgTxz0RgLixPmQK0dhCDpPjJt4+9gUlYrZOYYL2zj4rHBF4zwkcGQg0buEJOHxjp40M4QNxiJRsKh4KDNYul9ZwYy3mhPL7d3nn2OF9ZaZwsCbNW/oAZcGEqCTWRQdA4HVzfJ6lEnJkrFuqjsCuEjap1dwNrgyQrkPVmttRrrHUl122AnUrOAdGOubrYfT/XD76kyHdlbjV2ggy+VPDgks7s918Nm9hShzoFbInApartIdWF9WQMsfJPt6aJJ1jp5ZZK5stoqXj2pekfnD02vbL502nuEH7z5QHCcc6JaAeuenq3TMllfcQkKJ1Bxhdcs0E8BhQTysNxeHTeaKCyoO3+7u3hBedtQGs9ByyDfEYoYEIMraiNM9phAZufw8Z56cF+tv8DTRXywbI4Ndhijk9ZmJxjzX9iBd2/P1CzX3TSBZrVnrsoiLOKyltNCe+VI3Z4H6dEEQ8DnVTiWa3OlOFx9hvRpmYGRtbrHN1R+e4n1fyyONTZ+szhFWgPSet9JWXF5mryt+AC05HtnqOzvt05myaN31Jkunk6cVmkoofmn7Ekdlzdo8WmvPlZrMMddZWtCrR0rT+ecPfQfG8Mw/wDf1Q6fY��   Q Q                                                                                                                                                                                                                                                                                                                                       �+�   )�from_apiwelife_regions|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | reid | int(11) unsigned | NO |  | 区域ID | 
 | regName | varchar(64) | NO |  | 区域名称 | 
 | cid | int(11) unsigned | NO |  | 城市ID | 
 | reType | tinyint(3) | NO |  | 域名类型 | 
 | reLng | double | YES |  | 经度 | 
 | reLat | double | YES |  | 纬度 | 
 | reCreated | datetime | YES | 0000-00-00 00:00:00 |  | 
 | reUpdated | datetime | YES | 0000-00-00 00:00:00 |  | 
 | reDeleted | datetime | YES | 0000-00-00 00:00:00 |  | 
 | reStatus | tinyint(4) | YES | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��.    S X S                                                                       ��`  A�%from_apiwedatas_welife_qrcode_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ftime | bigint(20) | YES |  |  | 
 | bid | bigint(20) | YES |  |  | 
 | qcid | bigint(20) | YES |  |  | 
 | sid | bigint(20) | YES |  |  | 
 | qrid | text | YES |  |  | 
 | new_users | bigint(20) | YES |  |  | 
 | all_cancel_users | bigint(20) | YES |  |  | 
 | all_users | bigint(20) | YES |  |  | 
 | send_coupon | bigint(20) | YES |  |  | 
 | used_coupon | bigint(20) | YES |  |  | 
 | cancel_used_coupon | bigint(20) | YES |  |  | 
 | consum_amount | bigint(20) | YES |  |  | 
 | cancel_consum_amount | bigint(20) | YES |  |  | 
 | coupon_amount | bigint(20) | YES |  |  | 
 | cancel_coupon_amount | bigint(20) | YES |  |  | 
cY����_  /�mfrom_apiwedatas_user_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime   �   2 2                                                                                                                                                                                                                                                                                                        �J�   9�?from_apifix_last_charge_credit|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bid | varchar(16) | NO |  |  | 
 | sid | varchar(16) | NO |  |  | 
 | grid | int(11) unsigned | NO | 0 | 冗余用户等级ID（默认0为普通等级） | 
 | last_unused_charge_amount | decimal(55,0) | NO | 0 |  | 
 | last_unused_charge_cash | decimal(44,0) | NO | 0 |  | 
 | last_unused_credit | decimal(55,0) | NO | 0 |  | 
 | tcRecommenderEid | int(10) unsigned | NO | 0 | 推荐人员工id | 
 | tcCashierEid | int(10) unsigned | NO | 0 | 收银员员工id | 
 | tcAwardCredit | int(11) unsigned | NO | 0 | 奖励积分 | 
 | tcThirdId | bigint(64) unsigned | NO | 0 |  | 
cY��%    t                                                                                                                                                                                                                                                                       �]�  1�mfrom_apifix_last_charge_t2|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bid | varchar(16) | NO |  |  | 
 | sid | varchar(16) | NO |  |  | 
 | grid | int(11) unsigned | NO | 0 | 冗余用户等级ID（默认0为普通等级） | 
 | charge_cancel_tcSale | bigint(21) unsigned | YES |  |  | 
cY��%��  1�Cfrom_apifix_last_charge_t1|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bid | varchar(16) | NO |  |  | 
 | sid | varchar(16) | NO |  |  | 
 | grid | int(11) unsigned | NO | 0 | 冗余用户等级ID（默认0为普通等级） | 
 | charge_tcsaving | decimal(33,0) | YES |  |  | 
 | charge_tcsale | bigint(21) unsigned | YES |  |  | 
cY��%    ��型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
  | biz_id | string | 储值业务号，收银方保证唯一，提交储值需要biz_id | 字符串 |  是 |
  | cashier_id | int | 撤销收银员id | 数字 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
     &quot;result&quot;: &quot;SUCCESS&quot;,
     &quot;repeal_deal_id&quot;:&quot;1234234234&quot;,
     &quot;deal_id&quot;:&quot;1234234234&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result              |  string  |   储值撤销结果 SUCCESS:成功  FAIL:失败   |  SUCCESS       |
| repeal_deal_id      |  string  |   被撤销储值记录Id   |  12343234       |
| deal_id              |  string  |   储值撤销记录Id   |  12343234       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y�è   { {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �y�G 	%�3showdoc	开实体卡
    
**简要描述：** 

- 开实体卡，相当于创建新用户，开卡前需要调用开卡信息验证接口

**请求URL：** 
- ` /user/opencard `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:----- |:-----|-----   |
| phone | string | 开卡用户的手机号   �   ] �";�]                                                                                                                                                                                                                                                                                                                                           ��b 	7�9showdoc	储值是否开发票
    
**简要描述：** 

- 储值成功以后，使用此�   È>�a 	%�=showdoc	储值调整
    
**简要描述：** 

- 用户储值账户调整，增加/减少   &�[�` 	%�wshowdoc	储值撤销
    
**简要描述：** 

- 储值成功以后，使用储值业务号撤销储值

**请求URL：** 
- ` /charge/cancel `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  �   އn�_ 	%�showdoc	储值提交
    
**简要描述：** 

- 预储值提交，预览过的储值只�   ;�^�^ 	%�	showdoc	储值预览
    
**简要描述：** 

- 预储值，预览的储值并未真正�   .    otalfee | bigint(20) | NO | 0 |  | 
 | tcfee | bigint(20) | NO | 0 | ʵ | 
 | tcstoredpay | bigint(20) | NO | 0 |  | 
 | tcgiftcouponpay | bigint(20) | NO | 0 |  | 
 | tccouponpay | bigint(20) | NO | 0 |  | 
 | usecoupon | varchar(500) | YES |  | ʹ | 
 | usegiftcoupon | varchar(500) | YES |  | ʹ | 
 | sendcoupon | varchar(500) | YES |  |  | 
 | sendgiftcoupon | varchar(500) | YES |  |  | 
 | cancelcoupon | varchar(500) | YES |  |  | 
 | cancelgiftcoupon | varchar(500) | YES |  |  | 
 | overdue | varchar(500) | YES |  |  | 
 | tclprofit | bigint(20) | NO | 0 |  | 
 | tclprinciple | bigint(20) | NO | 0 |  | 
 | canceltclprofit | bigint(20) | NO | 0 |  | 
 | canceltclprinciple | bigint(20) | NO | 0 |  | 
 | overduetclprofit | bigint(20) | NO | 0 |  | 
 | overduetclprinciple | bigint(20) | NO | 0 |  | 
 | sendpoint | bigint(20) | NO | 0 |  | 
 | pointpay | bigint(20) | NO | 0 |  | 
 | tclactivityaddup | bigint(20) | NO | 0 |  | 
 | aid | bigint(20) | NO | 0 |  | 
 | remark | varchar(100) | NO |  |  | 
cY��%   �       &quot;gift_percent&quot;: 0,
                &quot;credit&quot;: 0,
                &quot;credit_percent&quot;: 0,
                &quot;gift&quot;: [
                    {
                        &quot;value&quot;: &quot;9&quot;,
                        &quot;name&quot;: &quot;9元cz代金券&quot;,
                        &quot;number&quot;: &quot;1&quot;
                    }
                ]
            },
            {
                &quot;price&quot;: &quot;12&quot;,
                &quot;money&quot;: 0,
                &quot;gift_percent&quot;: 0,
                &quot;credit&quot;: 1,
                &quot;credit_percent&quot;: 0
            },
            {
                &quot;price&quot;: &quot;73&quot;,
                &quot;money&quot;: &quot;13&quot;,
                &quot;gift_percent&quot;: 0,
                &quot;credit&quot;: 9,
                &quot;credit_percent&quot;: 0.13,
                &quot;gift&quot;: [
                    {
                        &quot;value&quot;:   �SubName | varchar(128) | NO |  |  | 
 | sAddress | varchar(512) | NO |  |  | 
 | sOralAddress | varchar(512) | NO |  |  | 
 | sPhones | varchar(512) | NO |  |  | 
 | sLongitude | varchar(32) | NO |  |  | 
 | sLatitude | varchar(32) | NO |  | γ | 
 | sDistrictId | int(10) unsigned | NO | 0 |  | 
 | sCommerceCircleId | int(10) unsigned | NO | 0 |  | 
 | sQrcode | varchar(32) | NO |  |  | 
 | sMark | varchar(512) | NO |  |  | 
 | sRemark | varchar(512) | NO |  |  | 
 | sBusinessState | tinyint(4) | NO |  | Ӫҵ״̬ | 
 | sBusinessArea | decimal(11,2) | NO |  | Ӫҵ | 
 | sServiceStart | date | NO | 0000-00-00 |  | 
 | sServiceEnd | date | NO | 0000-00-00 |  | 
 | sCreator | int(10) unsigned | NO |  |  | 
 | sRank | int(10) unsigned | NO | 0 |  | 
 | sCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | sUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | sDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | sStatus | tinyint(3) unsigned | NO | 0 |  | 
 | sLocationId | int(11) unsigned | NO | 0 | mp    平台门店对应的位置ID | 
 | sCrmSid | varchar(64) | NO |  | 对接门店id | 
 | sBrandName | varchar(128) | NO |  | 门店品牌名称 | 
 | sType | varchar(64) | NO |  | 类型 | 
 | sNearbyAddress | varchar(512) | NO |  | 附近地址 | 
 | sBusinessHours | varchar(512) | NO |  | 营业时间 | 
 | sBusInfo | varchar(512) | NO |  | 公交信息 | 
 | sPrintWidth | int(3) | NO | 0 |  | 
 | SDpShopId | varchar(32) | NO |  |  | 
 | sAuditLogs | text | NO |  | 门店审核日志 | 
 | sTradeType | varchar(32) | NO |  | 门店行业 | 
 | sTradeSubType | varchar(32) | NO |  | 门店子行业 | 
 | reid | int(11) unsigned | YES | 0 |  | 
 | sIsPrivateUserCard | tinyint(3) unsigned | NO | 0 | 是否标识该门店的卡只限本店使用 | 
 | sIsPrintPlug | tinyint(3) unsigned | NO | 0 | 是否使用插件打印 | 
 | sPublicPraiseId | varchar(32) | YES |  | 口碑ID | 
 | sPrintNumber | int(3) | NO | 1 | 插件打印张数 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �]�v  7�gfrom_apiwelife_product_orders|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | poOrderId | bigint(20) unsigned | NO | 0 | 商品订单id | 
 | uid | bigint(20) unsigned | NO | 0 | 用户id | 
 | bid | int(11) unsigned | NO | 0 | 商户id | 
 | poPayType | tinyint(3) unsigned | NO | 0 | 支付类型 1 微信 | 
 | poBusinessType | tinyint(3) unsigned | NO | 0 | 支付业务类型   I    I  I                                                               �+�T 	=�showdoc	查询会员等级信息
    
**简要描述：** 

- 查询会员等级信息

**请求URL：** 
- ` /user/grade `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno | string | 电子卡卡号、实体卡卡号、手机号、实体卡磁道号 | 数字 |  是 |

 **返回示例**

``` 
{
    &quot;errcode&quot;: 0,
    &quot;errmsg&quot;: &quot;OK&quot;,
    &quot;res&quot;: {
        &quot;charge&quot;: 0,
        &quot;charge_flag&quot;: &quot;1&quot;,
        &quot;credit_flag&quot;: &quot;1&quot;,
        &quot;id&quot;: &quot;3001554&quot;,
        &quot;limit_time&quot;: &quot;2017-08-01 00:00:00&quot;,
        &quot;member_discount&quot;: &quot;20&quot;,
        &quot;name&quot;: &quot;至尊黑卡会&quot;,
        &quot;old_id&quot;: &quot;3001576&quot;,
        &quot;privileges&quot;: [
               3   � &quot;2&quot;,
                        &quot;name&quot;: &quot;2元代金券&quot;,
                        &quot;number&quot;: &quot;1&quot;
                    },
                    {
                        &quot;value&quot;: 0,
                        &quot;name&quot;: &quot;炸春卷礼品券&quot;,
                        &quot;number&quot;: &quot;1&quot;
                    }
                ]
            }
        ],
        &quot;is_gift_diy&quot;: false
    }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| expired              |  datatime  |   过期时间    | 2018-08-02 23:59:59   或 永久有效   |
| content             |  array  |   储值规则列表    |  JSON       |
| is_gift_diy         |  boolean  |   自动匹配规则设置:false   自定义规则设置:true    |  true       |
**content储值规则设置**

| 字段名             |   类型   |    说明     |             举例 |
|:----- |:----- |:-----|-----                           |
| price             |  int  |   储值实收金额（单位：元）   |  200     |
| money             |  int  |   赠送金额（单位：元）   |  60       |
| gift_percent             |  float  |   按储值实收金额的百分比赠送金额的比例规则    |  0.13   |
| credit             |  int  |   赠送积分数量    |  2       |
| credit_percent             |  float  |   按储值实收金额的百分比赠送积分的比例规则    |  0.13   |
| gift             |  array  |   赠送券设置  |  JSON     |
**gift储值赠送券**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| value            |  int  |   面值（单位：元）    |        |
| name             |  string  |   券名称   |        |
| number             |  int  |   赠送数量    |  1       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y�Ą    auTP/8ipZ7RPb4ai16jGz3Sq5Hmmvlyx+j+7WUYjkOquX1svH2AeS/IOlzQlPywrmg6Q1/tApU2t6e+/8boLpHmY9IApGq8XjDru8bxMoYje6tgAI4nBLL1vEwWDo03D/s179PHy2enILV5utrBUzBFFg5KW/+QlSW2yLIsklm2yLDF8BD8ACsO9Q0A2bxy02EOCOqGrNKNI7rUsjp34YTm+j2Xs1O2Oa1146jiCLTaAZIbTsrlVNkJSFZ/I60DdEEUGbfOpTMri7TxktQOIRd585BUlhARvbzL1jWbjseiawcna/t08ZW7p6nJs02z+dYueuLLwGmrICiiZv0pXVyhj46gkaDmeR2HSKtCFnat5/es6t2+Jom07gR2JgHLwymwIy53cGTs0h0HhuW4s/k5Tyc780b3AfRlenqaAaEjs5duFrL6WDIvyQqaYcGDRkpNq7qLibwLZhMJTemjvOd96Uk2Lyv5mTtghWfflxozUkrKxBV7CX9Z0eLwmbOJ8Wwhl81o9s51QfT5A55gaGSUv+E544Wv35i7JKVzY057InH9px9/+c5/LT0lRiev8NGvfhAmJq86hFsR6Ihj6VpE8IvBET8fEIMOAl2IBIQZOS7IshAKxAMJUR4N+RTfqDiTkPyCqCRCDhFUjdiiOWpwHPhhX1B76MuH0sr5bnwo/Q7SwZj3L+RnRHUFVfL5ePZUUt7DnsJpLemi+Il+jd8+Ja9o7v7sKVBI6QM+sanx8SuxGC7m5pzEZOHA6DYhQTY/DpnhrTip/2G128brLXOj7IE1D+Nqbe7CZcb7A5WS+089GB9vKUSwb5UzMeBhdNfJ/U1cjsET8ZkgZHvP2n/mcfJOaMl+mH7yd5u03PYytLllbrZQN3xV/k2s/9bqAqlup1R5wEEQRV4QfIGRgE8I8kIwJAZDAyH0OzllwENWpUxOzSQHWJry62BYV3mnCKz0/9Um8Lx4cXkoNDQAH4mTF1WrXSa9edLtXlB3ppBK4Sk+AS/0K9M=cY��   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �:�[  '�1from_apiwedatas_tests|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | value | int(11) | NO |  |  | 
cY���]�Z  A�]from_apiwedatas_stat_product_daily|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | sdate | int(10) | YES |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | plNo | varchar(64) | YES |  |  | 
 | totalNum | double | YES |  |  | 
 | totalMoney | double | YES |  |  | 
cY��    m E m                                                                                                 �<�l 	1�-showdoc	储值记录列表
    
**简要描述：** 

- 查询储值记录列表

**请求URL：** 
- ` /charge/list `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | begin_date | date | 起始时间 | 日期 |  是 |
 | end_date | date | 截止时间 | 日期 |  是 |
  | sid | int | 门店id | 数字 |  否 |
  | cashier_id | int | 收银员id | 数字 |  否 |
  | page | int | 查询第几页| 数字 |  是 |
| is_allday | int | 是否整天查询| 数字  1：整天[默认]  2：指定时间段 |  否 |
| is_all | boolean | 是否全部流水| boolean  true是   false否[默认，只查接口来�   Ǚ'�k 	1�showdoc	消费记录详情    
**简要描述：** 

- 查询指定流水号消费记录详情

**请求URL：** 
- ` /consume/view `
  
**请求方式：**
- POST 

   �    ^  ^                                                                                    �� 	1�]	jshowdoc	消费记录列表eNrNWFtT20YUftev2KdOy8SNZFu2UX9Bp51Jp5enTMYotkI8NTa17HbSkBkgpUC4GALEhCSEi0nclNhkYi7BBv6MdyU/5S/0SKu7bCd4Om30Iu3u+b5zdnX0nV0xCC5mYECpjqsvJkixqF4cvG9uDAwghgkg8nxPre2Q+Wlc3SClo3apTqqHysYf5GhGrb9Tqwf4bA3PlNTtCgMcau2YvJn86ftvDYIAGkJXE9mMXBiRrqZTch4NMbozakgevcPNom4Lpt9d++FHpLHg4iRZs2JAYwi/LoFXvLQAz0h508Cbc0h7VGt1sr6oP5KtJlAh7RlfTLWaW2iMGRMCcEGXYN9oXwCN0Rv0ag5uSsOpTDwp5iVoGDf18Bi/nKNzhiYp7ZGnz3VX6zWKkjJJD4bMvCKvd7pixtCoOKzZpTJ5bVhfW2V/H09vtbcPoWPtAKbq8iHfzo7GU0kL0y5V8GlJ77Ct8dILap2S42I6nRTv2D7WazBK1uq4/Bf1ZwERB0tMRxAKas/utwwPeOZP5eXD6+3Gulot37BdmZ60pctm05KYsVzhqUr7foUcTpCDuj2K8rmCpE0KoVtiWpbA0GB935zHxVcQGlncw8Vd8myPnC5pCaYzeH3eFn+V4sYi+jzPT5G5fQgZ1rJ1sU0mah/j3+GBQZCYF6v4yaZSPm2dz0FWMkNDQ4i5y2jfyGe/FLL5r6RcLpFNSrQhIPaKe2xEHjaH6P3aN/TutMtJsml0Xe/WrrvWk22YlMQ0vH03I8dHomGei7LhcDAWY8NOfjc8kcm6obLn6g6VfV7DwcFYiI1wwe6gfDYP8d6SJDc0yHIcy7LdcT5ED1s5n81JSciBO5d0YgBlMS11RLM90QlRvh1PZAuj   �    �  �                                                                                                                                                                                                          �(�(  Q�cfrom_apiwelife_boss_manager_role2resources|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bmr2rid | int(11) unsigned | NO |  | PK | 
 | bmrid | int(11) unsigned | NO |  | 资源ID | 
 | bmr2rType | tinyint(3) unsigned | NO |  | 区别角色bmRole类型（1.角色ID 2.管理员ID） | 
 | bmRole | int(10) unsigned | NO |  | 当bmr2rType为1时，角色ID；为2时，管理员ID | 
 | bmr2rCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bmr2rUpdated | datetime | NO | 0000-00-00 00:00:00 | 修改时间 | 
 | bmr2rDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | bmr2rStatus | tinyint(1) unsigned | NO |  | 记录状态，1:正常 9:删除 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��'   �列表

**请求URL：** 
- ` /consume/list `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | begin_date | date | 起始时间 | 日期 |  是 |
 | end_date | date | 截止时间 | 日期 |  是 |
| page | int | 查询第几页| 数字 |  是 |
 | shop_id | int | 门店id | 数字 |  否 |
 | is_allday | int | 是否整天查询| 数字  1：整天  2：指定时间段时分秒[默认] |  否 |
| is_all | boolean | 是否全部流水| boolean  true是   false否[默认，只查接口来源的流水] |  否 |
| is_have_page | boolean | 是否包括分页信息| boolean  true是   false否[默认] |  否 |

 **返回示例**

``` 
{
    &quot;errcode&quot;: 0,
    &quot;errmsg&quot;: &quot;OK&quot;,
    &quot;res&quot;: [
        {
            &quot;deal_id&quot;: &quot;1567451704428804&quot;,
            &quot;cno&quot;: &quot;ssssssssssssssss&quot;,
            &quot;sid&quot;: &quot;1429830612&quot;,
       �        &quot;total_fee&quot;: &quot;2011000&quot;,
            &quot;fee&quot;: &quot;0&quot;,
            &quot;stored_pay&quot;: &quot;2011000&quot;,
            &quot;stored_sale_pay&quot;: &quot;2010000&quot;,
            &quot;cash_coupon_pay&quot;: &quot;0&quot;,
            &quot;gift_coupon_pay&quot;: &quot;0&quot;,
            &quot;credit_num&quot;: &quot;0&quot;,
            &quot;credit_pay&quot;: &quot;0&quot;,
            &quot;credit_award&quot;: &quot;2011&quot;,
            &quot;type&quot;: &quot;2&quot;,
            &quot;pay_type&quot;: &quot;2&quot;,
            &quot;pay_time&quot;: &quot;2017-05-15 16:53:52&quot;,
            &quot;remark&quot;: &quot;&quot;,
            &quot;biz_id&quot;: &quot;&quot;,
            &quot;user_coupon_name&quot;: &quot;&quot;,
            &quot;user_coupon_list&quot;: []
        },
        {
            &quot;deal_id&quot;: &quot;1567450525238177&quot;,
            &quot;cno&quot;: &quot;1685251105354518&quot;,
            &quot;sid&quot;: &quot;142   �9830612&quot;,
            &quot;total_fee&quot;: &quot;10000&quot;,
            &quot;fee&quot;: &quot;0&quot;,
            &quot;stored_pay&quot;: &quot;8500&quot;,
            &quot;stored_sale_pay&quot;: &quot;7727&quot;,
            &quot;cash_coupon_pay&quot;: &quot;1500&quot;,
            &quot;gift_coupon_pay&quot;: &quot;1500&quot;,
            &quot;credit_num&quot;: &quot;0&quot;,
            &quot;credit_pay&quot;: &quot;0&quot;,
            &quot;credit_award&quot;: &quot;85&quot;,
            &quot;type&quot;: &quot;2&quot;,
            &quot;pay_type&quot;: &quot;2&quot;,
            &quot;pay_time&quot;: &quot;2017-05-15 16:35:08&quot;,
            &quot;remark&quot;: &quot;&quot;,
            &quot;biz_id&quot;: &quot;&quot;,
            &quot;user_coupon_name&quot;: &quot;cc充值礼品券&quot;,
            &quot;user_coupon_list&quot;: [
                {
                    &quot;num&quot;: 1,
                    &quot;name&quot;: &quot;cc充值礼品券&quot;,
                    &qu    �  �                                                                                                                                                                                            �6�  +�%from_apiwelife_articles|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | waid | int(10) unsigned | NO |  | primary key | 
 | waTitle | varchar(20) | NO |  | 标题 | 
 | waModule | tinyint(4) | NO |  | 模块 | 
 | waTag | tinyint(4) | NO |  | 标签 | 
 | waRecommend | tinyint(4) | NO |  | 热门推荐 | 
 | waAbstract | varchar(50) | NO |  | 摘要 | 
 | waContent | mediumtext | NO |  | 内容 | 
 | bmName | varchar(32) | NO |  | 最后编辑者 | 
 | waCreated | datetime | NO |  | 创建时间 | 
 | waUpdated | datetime | NO |  | 更新时间 | 
 | waDeleted | datetime | NO |  | 删除时间 | 
 | waStatus | tinyint(4) | NO |  | 数据状态 | 
 | waPic | mediumblob | NO |  | 图片 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&                                                                                                                                                                                                                                                                                 �]�  ;�cfrom_apiwelife_actual_card_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | aclid | bigint(20) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | sid | int(10) unsigned | NO | 0 |  | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | aclRelateId | int(10) unsigned | NO |  | 关联批次id | 
 | aclRelateName | varchar(60) | NO |  | 关联批次名称 | 
 | aclCardCategory | varchar(64) | NO |  | 卡类别名称 | 
 | aclMode | tinyint(3) unsigned | NO |  |  | 
 | aclSalePrice | int(10) unsigned | NO |  | 售价 | 
 | aclPayType | tinyint(3) unsigned | NO |  | 支付方式 | 
 | aclSourceType | tinyint(3) unsigned | NO |  |    �    � x �                                                                                                                                                                                                             ��  ;�Ofrom_apiwelife_biz_account_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigne   ƅ�  9�3from_apiwelife_batches_invoice|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | biId | int(11) unsigned | NO |  |  | 
 | biLid | bigint(64) unsigned | NO |  | 相关的充值记录ID | 
 | biMoney | int(10) unsigned | NO |  | 发票金额 | 
 | biCreator | bigint(20) unsigned | NO |  | 操作者 | 
 | biCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | biUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | biDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | biStatus | tinyint(3) unsigned | NO | 1 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&    P  P                                                                      �,�  3�	from_apiwelife_biz_accounts|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | baId | varchar(32) | NO |  | bid_sid_type | 
 | bid | int(11) unsigned | NO | 0 | bid | 
 | sid | int(11) unsigned | YES | 0 | sid | 
 | baType | tinyint(3) unsigned | NO | 0 | 财务类型 1 短信储值 | 
 | baTotalAmount | int(11) unsigned | NO | 0 | 储值总金额分为单位 | 
 | baBalanceAmount | int(11) unsigned | NO | 0 | 账户余额分为单位 | 
 | baChargeCount | int(11) unsigned | NO | 0 | 充值次数 | 
 | baCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | baUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | baDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | baStatus | tinyint(3) unsigned | YES | 0 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&    �  �                                                                                                                                                               �S�
  M�=from_apimigrating_user_trade_credit_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | utcId | bigint(64) unsigned | NO |  | 交易号 | 
 | uid | bigint(20) unsigned | NO |  | 用户id | 
 | bid | int(11) unsigned | NO |  | 商家id | 
 | sid | int(11) unsigned | NO |  | 门店id | 
 | utcCredit | int(11) unsigned | NO |  | 账号积分数(不变) | 
 | utcSaving | int(11) unsigned | NO |  | 剩余积分数(小于等于账号积分数) | 
 | utcOperateRecord | text | NO |  | 积分账号操作记录 | 
 | utcCreated | datetime | NO |  |  | 
 | utcUpdated | datetime | NO |  |  | 
 | utcDeleted | datetime | NO |  |  | 
 | utcStatus | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | IsDeleted | tinyint(4) | NO |  |  | 
cY��%   s s                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ��  ?�'from_apimigrating_trade_logs_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | tlId | bigint(64) unsigned | NO | 0 | 调整流水id | 
 | bid | int(11) unsigned | NO | 0 | 商家id | 
 | sid | int(11) unsigned | NO | 0 | 门店id | 
 | uid | bigint(64) unsigned | NO | 0 | 用户id | 
 | tlBusine   �    ted | datetime | NO | 0000-00-00 00:00:00 | ??????? | 
 | beUpdated | datetime | NO | 0000-00-00 00:00:00 | ?????? | 
 | beDeleted | datetime | NO | 0000-00-00 00:00:00 | ?????? | 
 | beStatus | tinyint(3) unsigned | NO | 0 |  | 
 | beContactEmail | varchar(64) | NO |  | 联系人邮箱。 | 
 | bePercent | int(10) unsigned | NO | 0 | 成本占比 | 
 | beBusinessLicenseNo | char(50) | NO |  | 营业执照编号 | 
 | beTradeSubType | int(11) unsigned | NO |  | 子行业类别 | 
 | beQualificationNo | varchar(300) | NO |  | 资质编号 | 
 | beQualificationStuff | mediumblob | YES |  | 资质文件照片 | 
 | beQualificationStatus | tinyint(3) unsigned | NO | 1 | 资质审核状态 | 
 | beQualificationDesc | varchar(255) | NO |  | 资质审核信息 | 
 | beIDCardNo | char(18) | NO |  | 商家身份证号 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | beTest | int(3) | NO | 0 |  | 
 | beMobile | varchar(16) | NO |  | 手机号 | 
 | beTags | text | NO |  | 各种case标签json | 
cY��'    2) | NO |  | 门店行业 | 
 | beAuditLogs | text | NO |  |  | 
 | beCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | beUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | beDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | beStatus | tinyint(3) unsigned | NO | 0 |  | 
 | beContactEmail | varchar(64) | NO |  | 联系人邮箱。 | 
 | bePercent | int(10) unsigned | NO | 0 | 成本占比 | 
 | beBusinessLicenseNo | char(50) | NO |  | 营业执照编号 | 
 | beTradeSubType | varchar(32) | NO |  | 门店子行业 | 
 | beQualificationNo | varchar(300) | NO |  | 资质编号 | 
 | beQualificationStuff | mediumblob | NO |  | 资质文件照片 | 
 | beQualificationStatus | tinyint(3) unsigned | NO | 1 | 资质审核状态 | 
 | beQualificationDesc | varchar(255) | NO |  | 资质审核信息 | 
 | beIDCardNo | char(18) | NO |  | 商家身份证号 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | beTest | int(3) | NO | 0 |  | 
 | beMobile | varchar(16) | NO |  | 手机号 | 
cY��'   � �                                                                                                                                                                                                                                                                                                                                                                                                              �d�  ;�qfrom_apiwelife_biz_api_redirect|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | arid | int(11) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  | 商家id | 
 | url | varchar(512) | NO |  | 跳转到商家设定的URL | 
 | encryptUrl | varchar(32) | NO |  | 加密的跳转URL | 
 | barCreated | datetime | NO |  |  | 
 | barUpdated | datetime | NO |  |  | 
 | barDeleted | datetime | NO |  |  | 
 | barStatus | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | 0000-00-00 00:00:00 |  | 
 | IsDeleted | tinyint(4) | NO |  |  | 
cY��'    来源 | 
 | aclOperator | int(10) unsigned | NO |  | 操作员 | 
 | aclSourceNo | varchar(64) | NO |  |  | 
 | aclActualNo | varchar(64) | NO |  |  | 
 | aclPhone | char(11) | NO | 0 | 手机号 | 
 | aclCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aclUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aclDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aclStatus | tinyint(3) unsigned | NO |  |  | 
 | aclTransNumber | varchar(64) | NO |  | 支付交易订单号 | 
 | aclPayStatus | tinyint(4) unsigned | NO | 1 | 支付状态 | 
 | aclBizId | varchar(64) | NO |  | 第三方提交的交易单号 | 
 | aclPrintNumber | int(5) | NO | 0 | ypos小票打印次数 | 
 | aclFromOtherCNo | varchar(256) | NO |  | 外卡导入-旧系统卡号 | 
 | aclFromOtherCMoney | int(11) | NO | 0 | 外卡导入-旧系统储值余额（单位：分） | 
 | aclFromOtherCCredit | int(11) | NO | 0 | 外卡导入-旧系统积分余额 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&     _                �8�  ?�from_apiwelife_actual_card_batchs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | acbId | int(11) unsigned | NO |  | primary key | 
 | bid | int(11) unsigned | NO | 0 | 商户id | 
 | acbTotalNum | int(11) unsigned | NO | 0 | 卡号数量 | 
 | acbPrefixNum | int(1   ���  A�]from_apiwelife_activity_totalizers|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  | primary key | 
 | atKey | varchar(32) | NO |  | aid    uid | 
 | aid | int(10) unsigned | NO |  |  | 
 | uid | bigint(20) | NO |  |  | 
 | atCount | int(10) unsigned | NO |  |  | 
 | atAlready | smallint(10) unsigned | NO |  |  | 
 | atHistories | text | NO |  |  | 
 | atCreated | datetime | NO |  |  | 
 | atUpdated | datetime | NO |  |  | 
 | atDeleted | datetime | NO |  |  | 
 | atStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&   � �                                                                                                                                                                                                                                                                                                                                                                                                     �m�  G�wfrom_apiwelife_activity_credit_orders|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | acoid | int(10) unsigned | NO |  |  | 
 | aid | int(10) unsigned | NO |  |  | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | acoCredit | mediumint(9) | NO |  | 用户参加某个活动的累计积分值，允许为负数。 | 
 | acoHistories | text | NO |  | 积分累计的交易列表。 | 
 | acoCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | acoUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��&   �ot;amount&quot;: &quot;15.00&quot;,
                    &quot;couponId&quot;: &quot;2116316&quot;
                }
            ]
        }
    ]
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| deal_id              |  string  |   消费流水   |  1535178031641110       |
| cno              |  int  |   消费用户卡号   |  1265693       |
| sid              |  int  |   消费门店id   |   3196764329      |
| total_fee    |  int  |   消费总金额(单位:分)  |   14000      |
| fee              |  int  |   实收金额(单位:分)   |   10000      |
| stored_pay     |  int  |   使用储值支付金额(单位:分)    |   2000      |
| stored_sale_pay     |  int  |   使用实际储值支付金额(单位:分)    |   2000      |
| cash_coupon_pay   |  int  |   使用代金券抵扣金额(单位:分)   |   1000      |
| gift_coupon_pay    |  int  |   使用礼品券抵扣金额(单位:�    �)   |   1000      |
| credit_num    |  int  |   使用积分数量(单位:个)   |   0       |
| credit_pay    |  int  |   使用积分抵扣金额(单位:分)   |   0      |
| credit_award    |  int  |   奖励积分数量(单位:个)   |   100      |
| type              |  int  |   交易类型   |   1:充值  2:消费 3:撤销消费  4:被撤销消费  5:系统回收  6:撤销充值 7:被撤销充值  8:手工调账减少充值  9:手工调账减少积分  10:积分换礼      |
| pay_type      |  int  |   消费支付类型   |   1:现金   2:银行卡   3:微信  4:支付宝   6:手工调整      |
| pay_time       |  date  |   交易时间   |         |
| remark     |  string  |   备注   |         |
| biz_id    |  int  |   第三方交易号  |         |
| user_coupon_name    |  string  |   消费使用券名称  |  cc充值礼品券       |
| user_coupon_list    |  array  |  消费使用券明细   |         |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��                   
 | tcRemark | varchar(100) | NO |  | 备注项 | 
 | tcBizId | varchar(32) | NO |  | tcBizId | 
 | uNo | varchar(64) | NO |  |  | 
 | grid | int(11) unsigned | NO | 0 | 冗余用户等级ID（默认0为普通等级） | 
 | tcSourceType | tinyint(3) unsigned | NO | 1 | 储值来源 | 
 | tcTransNumber | varchar(64) | YES | 0 | 交易单号 | 
 | tcPayStatus | tinyint(4) unsigned | NO | 0 | 订单支付状态 | 
 | tcSurplusMoney | int(10) unsigned | NO |  | 剩余补开发票金额 | 
 | tcPrintNumber | int(5) unsigned | NO | 0 | ypos打印小票次数 | 
 | tcSaleSaving | int(11) unsigned | NO | 0 | 本笔储值剩余本金 | 
 | tcRecommenderEid | int(10) unsigned | NO | 0 | 推荐人员工id | 
 | tcCashierEid | int(10) unsigned | NO | 0 | 收银员员工id | 
 | tcAwardCredit | int(11) unsigned | NO | 0 | 奖励积分 | 
 | tcThirdId | bigint(64) unsigned | NO | 0 |  | 
 | ecsid | int(10) unsigned | NO | 0 | 提成设置id | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��/   � �                                                                                                                                                                                                                                                                                                                                                                                                                                  �D�o 	I�%showdoc	指定会员消费记录列表
    
**简要描述：** 

- 指定会员消费记录列表

**请求URL：** 
- ` /consume/user `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
  | cno | string | 会员卡号 | 数字 |  是 |
 | begin_date | date | 起始时间 | 日期 |  是 |
 | end_date | date | 截止时间 | 日期 |  是 |
  | shop_id | int | 门店id | 数字 |  否 |
| page | int | 查询第几页| 数字 |  否 |

 **返回示例**

``` 
  {
    &quot;er   a   9 9                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               �;�r 	1�+showdoc	异业营销发券
    
**简要描述：** 

- 给用户发送其他商家的代金券或礼品券

**请求URL：** 
- ` /coupon/othersend `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | cno  | int | 会员卡号 | 数字 |  是 |
 | aid | int | 活动id | 数字 |  是 |
 | biz_id | string | 发送业务号，不允许�  	    � Q �                                                                                                                                                                                                                      �d�q 	I�g	showdoc	获取异业营销活动列表
    
**简要描述：** 

- 获取异业营销活�  ��p 	I�[showdoc	指定会员储值记录列表
    
**简要描述：** 

- 指定会员储值记录列表

**请求URL：** 
- ` /charge/user `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
   | cno | string | 会员卡号 | 数字 |  是 |
 | begin_date | date | 起始时间 | 日期 |  是 |
 | end_date | date | 截止时间 | 日期 |  是 |
  | shop_id | int | 门店id | 数字 |  否 |
  | page | int | 查询第几页| 数字 |  否 |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &q      (
        	12345, 67890
    ),
    'desc' =&gt; array()
)
//排序以后得到结果
array(
	'coupons' =&gt; array(
	12345, 67890
    ),
    'desc' =&gt; array(),
	'grade' =&gt; 1,
	'limit' =&gt; 20,
	'offset' =&gt; 0,
	'orderby' =&gt; array(
        'balance' =&gt; 'desc'
    )
)
```
第二步：排序后的数组生成URL键值对(键值对需要urlencode，空参数值不参与生成URL键值对)
```
coupons%5B0%5D=12345&amp;coupons%5B1%5D=67890&amp;grade=1&amp;limit=20&amp;offset=0&amp;orderby%5Bbalance%5D=desc
因为desc是空数组，因此不放入构造的查询字符串，不参与加密串
```
第三步：依次连接appid，appkey，版本号，时间戳
```
coupons%5B0%5D=12345&amp;coupons%5B1%5D=67890&amp;grade=1&amp;limit=20&amp;offset=0&amp;orderby%5Bbalance%5D=desc&amp;appid=ct_ZjQ4NmU2OTE0OGY1MTJ&amp;appkey=202cb962ac59075b964b07152d234b70&amp;v=2.0&amp;ts=1426773603
```
第四步：MD5（小写）
```
f7f37120018f522b537f02f3b643ee15
```
结束：sig=d876d2f82268a5ea2b6398db81824101Y���    datetime | NO | 1970-01-01 00:00:00 | 上线时间 | 
 | paOfflineTime | datetime | NO | 1970-01-01 00:00:00 | 下线时间 | 
 | paPayTime | datetime | NO | 1970-01-01 00:00:00 | 付款时间 | 
 | paPayNum | varchar(256) | NO |  | 第三方付款单号 | 
 | paActivityStart | datetime | NO | 1970-01-01 00:00:00 | 活动的开始时间 | 
 | paActivityEnd | datetime | NO | 1970-01-01 00:00:00 | 活动的结束时间 | 
 | paConf | text | YES |  | 插件配置信息 | 
 | paConfTime | datetime | NO | 1970-01-01 00:00:00 | 提交配置时间 | 
 | paPreviewCardList | varchar(1024) | NO |  | 预览用户列表（json会员卡号） | 
 | paCreator | int(11) | NO | 0 | 创建者ID | 
 | paCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | paUpdator | int(11) | NO | 0 | 修改者ID | 
 | paUpdated | datetime | NO | 1970-01-01 00:00:00 | 更新时间 | 
 | paDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q  ��列表

**请求URL：** 
- `/activity/otherlist `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | page  | int | 页数 | 数字 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: [
    {
      &quot;id&quot;: &quot;2000000&quot;,
      &quot;name&quot;: &quot;异业营销活动&quot;,
      &quot;bname&quot;: &quot;商家A&quot;,
      &quot;live_time&quot;: [],
      &quot;coupons&quot;: [
        {
          &quot;couponid&quot;: &quot;2000000&quot;,
          &quot;name&quot;: &quot;100元增券100元&quot;,
          &quot;amount&quot;: &quot;100&quot;,
          &quot;num&quot;: 1,
          &quot;type&quot;: &quot;1&quot;
        }
      ]
    },
    {
      &quot;id&quot;: &quot;1018373&quot;,
      &quot;name&quot;: &quot;异业营销活动2&quot;,
      &quot;bname&quot;: &quot;商家B&quot;,
      &quot;live_time&quot;: [],
        &quot;coupons&quot;: [
        {
          &quot;couponid&quot;: &quot;1019223&quot;,
          &quot;name&quot;: &quot;牛奶礼品券&quot;,
          &quot;amount&quot;: &quot;14&quot;,
          &quot;num&quot;: 1,
          &quot;type&quot;: &quot;2&quot;
        }
      ]
    }
  ]
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| id              |  int  |   活动id    |  2000000       |
| name              |  string  |   活动名称    |  消费满1000增券       |
| bname              |  string  |   合作商家名称    |  某某商家       |
| live_time             |  array  |   活动的有效时间段，为一个数组（列表），无时间段限制时，为空数组。    |  [&quot;5:00-9:00&quot;, &quot;11:00-14:00&quot;, &quot;17:00-19:00&quot;]       |
| coupons             |  array  |   成功参加该活动后，可获得的代金券或礼品券列表。    |  [{&qu    ot;couponid&quot;:&quot;1001&quot;,&quot;name&quot;:&quot;50元代金券&quot;,&quot;amount&quot;:5000,&quot;num&quot;:2,&quot;type&quot;:1},{&quot;couponid&quot;:&quot;1002&quot;,&quot;name&quot;:&quot;飞天神马QQ公仔&quot;,&quot;amount&quot;:0,&quot;num&quot;:1,&quot;type&quot;:2}]       |
**活动返券coupons返回值**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| couponid              |  int  |   券模板id    |  2000000       |
| name              |  string  |   券名称    |  50元代金券       |
| amount              |  int  |   券面值(单位：分)    |  5000       |
| num              |  int  |   赠送数量    |  2       |
| type              |  int  |   券类型1：代金券，2：礼品券    |  1       |
 **备注** 

- 更多返回错误代码请看错误代码描述


Y��                                                                                                                           B  B                                                        �:�s 	=�showdoc	异业营销券码核销
    
**简要描述：** 

- 券码核销（备注：不能核销自己发的券，用于核销别人发的券）

**请求URL：** 
- ` /coupon/otherverification `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | coupon_code  | string | 券码 | 字符串 |  是 |
  | cashier_id | int | 收银员id | 数字 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| result      |  string  |   核销结果   SUCCESS:成功   FAIL:失败    |  SUCCESS      |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��    ��复 | 字符串 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;biz_id&quot;: &quot;ADB3fdfGdh&quot;,
    &quot;coupon_codes&quot;: [
        {
          &quot;couponid&quot;: &quot;1001&quot;,
          &quot;code&quot;:&quot;1232121&quot;
        },
         {
          &quot;couponid&quot;: &quot;1002&quot;,
          &quot;code&quot;:&quot;12321213223&quot;
        }
      ]
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| biz_id             |  string  |   兑换业务号    |  1265693       |
| coupon_codes     |  array  |   发送的券码（券码16位）    |  [{&quot;couponid&quot;:&quot;1001&quot;,&quot;code&quot;:&quot;1243241&quot;},{&quot;couponid&quot;:&quot;1002&quot;,&quot;code&quot;:&quot;1231232&quot;}]          |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y��V    b � b                                                                                      ��u 	7�9showdoc	接口调用时序图####获取收银员
大部分接口需要用到收银员id，可以提前配置好，也可以通过/cashier/list接口获取门店下所有的收银员，也可以通过/pos/signin接口做一个收银员签到功能获取收银员id
####交易消费
![](http://wiki.acewill.net/Public/Uploads/2017-09-13/59b8a7c9dc528.png)
####储值交易
![](http://wiki.acewill.net/Public/Uploads/2017-09-13/59b8a86b32df5.png)
####开实体卡
![](http://wiki.acewill.net/Public/Uploads/2017-09-13/59b8a8a0aae34.png)
####绑定实体卡
![](http://wiki.acewill.net/Public/Uploads/2017-09-13/59b8a8ba54ac2.png)
Y����	�t 	%�Ushowdoc	更新日志###2017年6月10日更新

| 接口分类 | 接口名 | URL | 字段名 |  类型  |  说明  |  格式   | 
|:----    |:---|:----- |:-----|:----- |-----   |
| 5.储值接口 | 储值预览 | /charge/preview | recommenderecode | 请求�      �  �                                                                                                                                                                                                          �(�	 	%�tshowdoc	更新日志eNq1U81u2kAQvvMUSNz5a0uaR4jUU6WegYKVIBWIIEl76MGhpDVNwUQNMTGUJLQEVInYqdyYEFMepp71csordJZFgZjmVFWyrZnZmfm+2fns8/nCwdAKXBsR0pRCQaJ0SMMgR7onFottxV++EjxvvaTSAfkrSO+dyxvvnVsto/3i+TP8Ql8hFz95xItJ0Nr3MpNqBqlXpiY5tcCSvczGjk/8UOiBaPFWrMPUnbSLtCuhG0hsxHPrQmAzJ+ykhNcYyQmJbDotZJICs5IChqhmkssCyAVS06e0erRctYdDOKiD2WGPbLJ4TUd+jAObyeO7N3E4Mp8Ymr2QnzPixO1B/9b6BO0WfDwlVxI1rn+Lu5wpMywRymdoODcHaMwK9XfOYY8oVzCUofHLswC3wi44NIfDF1uv+sEq2AOVVjuTQ5E3cVeFg+4qp19yhl2efWuppLSP4yI2qRmLR0iOl9mWirfCj0DSSfMEKU4UYxnvKeI9csPxmWm3CNLx30vCj901HHK2V6UHQ4Xh1TWonk9EFS/pPyqMSSzsZ4uQzDuJ0YoJ8hEPUuMcv/b4jOxqTG7beSEXiCcS2e3MFvr5jexmNJVc1hgfZC15X1b/BpaOv4lOATEezcd3Upl11mB8CI2WCxhkjbVsivCty2/WHh1P2l+WVb6wnlVcTzDiXs9cOycdqrWhXLMH3zlfGH2GUhkl7ahFLhnOnalpIXmmKbXIfw16ocOo9lAO7O0xBT2cA+YPOv6AwmTJ0uAP5nantQ==cY��    � � �                                                                                                                                                 �� 	1�-Cshowdoc	接口调用流程eNqNVG1P21YU/u5f4U/94IVgO28QlA8VqyZ1o9kW+LBV1TCxk3nKW2OnXUWQElom0gbC1FA6lq4gKEVV88LKINC0/S+t77X51L/QYx8HiFS2RYp87nOfc849zzn3chxdfkZqW1b7kO7Nk0aHPCl97K1zHDPE/qzrOS08PCzlVK8UV26rqZQ3o+jM5S/Qh1ZKtFFBm9Re0HqbVsvfRmOTGMxrv  �e� 	%�Ashowdoc	接口规则eNpdjluKwjAYhd9dRRZgRQRBfBYZBtRC6276YJXBEUYj1ht4K3h90OowL06tdjPJn7gL0zQieCCQ/Oc7f46FhPjGht86krLEAYx5eIoeCSuvCUlDUzcxRIgELr85MPynAZYhcvZJOONHm/grGDvUa9GvHdS2yXuzyfo79GGauqFi8QrA3Yh9rVCkXjFMJMbwN4gRhQ9O0PbADZ54bNLeDw/7dDKP/XvjKpqgT6NSRoqVaXoYsf2GBUPm2jLNLgtyrqkvq2ZRy70zUYwdbrTbZt5IlJGxUiGr6nTWFC9Z6xume+lkUmnhJB7MO6nycY��W�a�
 	%�}Dshowdoc	安全规范eNrFVFtPG0cUfmZ/hV+CwbKa3bHXa0D70DZVlSgXNZeHNorKrndNSQAb21RCUSQHAbET30RN3WADJqpJL76Qi8LGOPBfop1Z+4m/0LMzu5ALqtSnrvbyzTlzzpzv2zPj81mtQ1zKW+0KebXu83E4myfFEmceFPD6Km6/waUCLu71C/u4+CtuPyOZfevvDl7Lk    uot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| charge_id              |  string  |   储值流水   |  1535178031641110       |
| cno              |  int  |   储值用户卡号   |  1265693       |
| sid              |  int  |   储值门店id   |   3196764329      |
| total_fee    |  int  |   充值金额(单位:分)  |   12000      |
| fee              |  int  |   实收金额(单位:分)   |   10000      |
| award_fee     |  int  |   奖励金额(单位:分)    |   2000      |
| award_coupons   |  array  |   奖励券   |   详情见【奖励券】      |
| type              |  int  |   交易类型   |   1:储值   6:撤销储值   7:被撤销储值   8:手�    �调整减少储值      |
| pay_time       |  date  |   交易时间   |         |
| pay_type      |  int  |   储值支付类型  |  1:现金  2:银行卡   3:微信  4:支付宝  5:店内微信支付  6:手工调整   |
| has_receipt    |  int  |   是否开票   |   1:开票    2:未开票    0:未开票      |
| cashier_id   |  int  |   操作人Id   |         |
| remark     |  string  |   备注   |         |
| grade     |  int  |   用户等级id   |         |
| grade_name     |  string  |   用户等级名称   |         |
| biz_id     |  string  |   第三方业务号   |         |
**奖励券award_coupons**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| coupon_id   |  int  |   券id   |         |
| name   |  string  |   券名称   |         |
| amount   |  int  |   券金额   |         |
| number   |  int  |   奖励数量   |         |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���    �数 | 推荐人员工工号 | 数字 |  

###2017年6月26日更新
在1.接口说明中，增加消费、储值、开卡、绑卡接口调用时序图

###2017年7月11日更新
新增9.异业营销接口

###2017年7月20日更新
新增等级接口：手工调整等级接口、更新会员等级到期时间接口

###2017年8月3日更新
新增储值规则接口

###2017年8月24日更新
新增会员储值门店间是否通用

| 接口分类 | 接口名 | URL | 字段名 |  类型  |  说明  |  格式   |  
|:----    |:---|:----- |:-----|:----- |-----   |
| 2.用户接口 | 获取用户账户信息 | /user/account | shop_id | 请求参数 | 门店Id | 数字 |  
| 2.用户接口 | 获取用户账户信息 | /user/account | max_shop_use_saving | 返回参数 | 门店可用最大储值余额 | 数字 |  


###2017年9月06日更新
新增接口：查询单个用户当前卡的等级信息、查询单个会员的消费记录、查询单个会员的充值记录、查询单个会员已过期的券cY���    S  S                                                                         �)�v 31�ocatchyouhand@qq.com统计学生成绩学生多次考试取最高成绩为有效成绩

基础数据
```sql
mysql&gt; select student,object,score from student_score;
+---------+---------+-------+
| student | object  | score |
+---------+---------+-------+
| aa      | english |    32 |
| aa      | english |    64 |
| bb      | english |    55 |
| bb      | english |    23 |
| aa      | math    |    14 |
| bb      | math    |    13 |
| aa      | math    |    99 |
| bb      | math    |    90 |
+---------+---------+-------+
```

统计sql

```sql
mysql&gt; select student,object,max(score) from student_score group by student,object;
+---------+---------+------------+
| student | object  | max(score) |
+---------+---------+------------+
| aa      | english |         64 |
| aa      | math    |         99 |
| bb      | english |         55 |
| bb      | math    |         90 |
+---------+---------+------------+
```c_��   � �                                                                                                                                                                                                                                                                                                                                                                                               �k�`  '�from_apiwelife_plugin|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | pid | int(11) | NO |  | 插件ID | 
 | pName | varchar(1024) | NO |  | 插件名字 | 
 | pBizId | varchar(256) | NO |  | 第三方ID号 | 
 | pcid | int(11) | NO | 0 | 公司id | 
 | pContactPerson | varchar(128) | NO |  | 联系人 | 
 | phone | varchar(18) | NO |  | 手机号 | 
 | price | int(11) unsigned | NO | 0 | 价格（单位：分/天） | 
 | pCallbackUrl | varchar(1024) | NO |  | 回调URL（第三方提供） | 
 | pReceiveConfUrl | varchar(1024) | NO |  | 接收配置URL（第三方      VoeP94BPEhvmEc7+HEdd1bNd0dW+Q9rY1mJx+/pi8e9nGmkTeMvGE5ruPMWd8snBvBzPl9yesoqb5NMqf98GWeeQgFWswlzSKtx3NvAe6v9zj55sYSLS2R9D27rYJnkstbKcwiHdb688fXFi1b9IW5V8IqBu0WcfwRvUliD98ggvYbfrUEVuFVisebb7f7uQ+Ye5T7MzU1OTnIJfV6+Pzy/EEtNTCUUTWdwXPAzMDM9O51ybIh3jLFoNKm7Vt7/Pr0ZS2h6Ql0ENH7/fbqmKjPKXES3h/BoejICnwf2xEhsIR6bS9qe2wIKBEV/SAqP8Xf8p/PGb995QEvrH1X7OzlbhHyb1W+b4z/FufPnP1QH7y6ZxhPQjlMSCWVxhBvyUipejzw8lZrwCH6wsJpdE2+bKDfXgqjJ4eEa3XxDXoeR6/DatXo5D1yjfvrxOsw+CfU41xAj66FsP4qjmT4KGuVGgSFjbB407HY8rOAMUP2FbNVOSZ694n9ayX+mVmcJ87l8Z2vlEv43xYCf/X/ttu/mWNsztkAVOpz9VbZHbl2/PCi3cboHW2nkBA1qaejphcSMPheJaTq0u/Vnl7UETDCNPGDTKHyegi3sCHdO/Io/J16QqWDDymx84tQh2A4qIXVQjWSBYqqOjJiD6SI7A6YIhDvk7SQ2bw5X66bRtSH5rQO1Mor2Nq3WSet3qJiUD/FKg2wtD9J1W4PtRr/zDPa41dw1jZf0WHFYOeeO8fJERCPLRDQPN0lzp3+0RQoNev5A2MmxZGUzpNbExX3ApPJmUHlNMq/+HzmolxYoR1I//nD3u+DV2Vvo2s1v+Gvffi9cuXnJnQCVQ2YUUcdCSImIY7wkAgyqvCSISIM6VYkt9bOMvmAolZSFIApJUiDEB1yFcLXKFLpyQTzuZfBeEa8+Pe5lqT8qRQOSgHheCEdFhFQxIEV5FA2ooWBA1wWRJYG9t7kNGeD0lrWwFNJQNIxQKKyIuoLUUGAsrKlhIYyCAi/8A/B7zSQ=cY��0    | int(11) | NO | 0 | 活动ID | 
 | ppType | tinyint(4) | NO | 0 | 奖品类型（1:代金券 2:礼品券 3:积分 4:储值） | 
 | ppCouponId | bigint(20) | NO | 0 | 优惠券ID(奖品有优惠券的时候使用此字段) | 
 | aid | int(11) | NO | 0 | 活动id（奖品需要关联活动的时候用） | 
 | ppOneCount | int(11) unsigned | NO | 0 | 一次获奖发放数量 | 
 | ppTotalCount | int(11) | NO | 0 | 奖品总数量 | 
 | ppSendCount | int(11) | NO | 0 | 已发送数量 | 
 | ppStock | int(10) unsigned | NO | 0 | 剩余库存 | 
 | ppDesc | varchar(1024) | NO |  | 描述 | 
 | ppCreator | int(11) | NO | 0 | 创建者ID | 
 | ppCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | ppUpdator | int(11) | NO | 0 | 修改者ID | 
 | ppUpdated | datetime | NO | 1970-01-01 00:00:00 | 更新时间 | 
 | ppDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | ppStatus | tinyint(4) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q    "  � "                      �P�_  3�Qfrom_apiwelife_plugin_prize|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ppid | int(11) | NO |  | ID | 
 | ppName | varchar(1024) | NO |  | 名称 | 
 | paid   �~�^  ;�%from_apiwelife_plugin_prize_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | pplid | bigint(20) | NO |  | ID | 
 | bizId | varchar(64) | NO |  | 兑换业务号， 唯一值 | 
 | pid | int(11) | NO | 0 | 插件ID | 
 | ppid | int(11) | NO | 0 | 奖品ID | 
 | ppName | varchar(1024) | NO |  | 奖品名称 | 
 | ppCount | int(11) | NO | 1 | 奖品数量 | 
 | paid | int(11) | NO | 0 | 活动ID | 
 | bid | bigint(20) | NO | 0 | bid | 
 | uid | bigint(20) | NO | 0 | 用户id | 
 | cno | varchar(64) | NO |  | 卡号 | 
 | pplCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | pplStatus | tinyint(4) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q    提供） | 
 | pAppkey | varchar(64) | NO |  | Appkey | 
 | pConf | text | NO |  | 插件配置项（json,[{参数；别名；数据类型[；单选、复选列表项]；描述}]） | 
 | pDesc | varchar(2048) | NO |  | 插件详情 | 
 | pHeadPic | varchar(1024) | NO |  | 封面图片 | 
 | pDescPic | varchar(2048) | NO |  | 详情图片(json，最多10张） | 
 | pAuth | varchar(256) | NO |  | 插件调用接口权限（json，['A','B']） | 
 | pCreator | int(11) | NO | 0 | 创建者ID | 
 | pCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | pUpdator | int(11) | NO | 0 | 修改者ID | 
 | pUpdated | datetime | NO | 1970-01-01 00:00:00 | 更新时间 | 
 | pDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | pStatus | tinyint(4) | NO | 1 | 状态 | 
 | pType | int(11) | NO | 0 | 类型 | 
 | pReleaseDate | date | NO | 1970-01-01 | 发行日期 | 
 | pHighlights | varchar(2048) | NO |  | 亮点 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q    b % b                                                                                      �7�]  7�from_apiwelife_plugin_company|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | pcid | int(11) | NO |  | 公司id | 
 | pcName | varchar(1  �W�\  3�_from_apiwelife_plugin_booth|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | pbid | int(11) | NO |  | ID | 
 | pbType | int(11) | NO | 0 | 展位类型 | 
 | pid | int(11) | NO | 0 | 插件ID | 
 | pbBannerPic | varchar(1024) | NO |  | banner图片 | 
 | pbCreator | int(11) | NO | 0 | 创建者ID | 
 | pbCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | pbUpdator | int(11) | NO | 0 | 修改者ID | 
 | pbUpdated | datetime | NO | 1970-01-01 00:00:00 | 更新时间 | 
 | pbDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | pbStatus | tinyint(4) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q   � �                                                                                                                                                                                                                                                                                                                                                                                              �t�[  /�from_apiwelife_plugin_bid|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | pbid | int(10) unsigned | NO |  | id | 
 | bid | bigint(20) | NO | 0 | 商户id | 
 | pid | int(11) | NO | 0 | 插件id | 
 | pbLastPaid | int(11) | NO | 0 | 插件活动ID | 
 | pbCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | pbUpdated | datetime | NO | 1970-01-01 00:00:00 | 修改时间 | 
 | pbDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | pbStatus | tinyint(4) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q    024) | NO |  | 公司名字 | 
 | pcContactPerson | varchar(128) | NO |  | 联系人 | 
 | pcPhone | varchar(32) | NO |  | 手机号 | 
 | pcServicePhone | varchar(32) | NO |  | 客服电话 | 
 | pcEmail | varchar(1024) | NO |  | 联系邮箱 | 
 | pcCity | int(11) | NO | 0 | 城市 | 
 | pcAddress | varchar(1024) | NO |  | 公司地址 | 
 | pcContractStartDate | date | NO | 1970-01-01 | 合同起始日期 | 
 | pcDesc | varchar(2048) | NO |  | 介绍 | 
 | pcHeadPic | varchar(1024) | NO |  | 公司logo | 
 | pcContractPic | varchar(2048) | NO |  | 合同图片(json，最多10张） | 
 | pcCreator | int(11) | NO | 0 | 创建者ID | 
 | pcCreated | datetime | NO | 1970-01-01 00:00:00 | 创建时间 | 
 | pcUpdator | int(11) | NO | 0 | 修改者ID | 
 | pcUpdated | datetime | NO | 1970-01-01 00:00:00 | 更新时间 | 
 | pcDeleted | datetime | NO | 1970-01-01 00:00:00 | 删除时间 | 
 | pcStatus | tinyint(4) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q    �  �                                                                                                                                                   �W�Z  9�Yfrom_apiwelife_plugin_activity|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | paid | int(11) unsigned | NO |  | 活动ID | 
 | paSn | varchar(18) | NO |  | 活动编号 | 
 | paUrl | varchar(1024) | NO |  | 链接地址 | 
 | paName | varchar(256) | NO |  | 活动名称 | 
 | paDesc | varchar(2046) | NO |  | 活动描述 | 
 | pid | int(11) | NO | 0 | 插件id | 
 | bid | bigint(20) | NO | 0 | 商户id | 
 | aid | int(11) | NO | 0 | 商户营销活动ID | 
 | paAppid | varchar(32) | NO |  | appid | 
 | paFee | int(11) | NO | 0 | 支付金额(单位：分） | 
 | paPayStatus | tinyint(4) | NO | 1 | 支付状态（1：待支付；10：支付成功） | 
 | paStatus | tinyint(4) | NO | 1 | 活动状态（1：配置中；10：已提交配置；20：已上线；21：已下线） | 
 | paOnlineTime |       {  {                                                                                                                 ��X  5�1from_apiwelife_partner_users|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | pauid | int(10) unsigned | NO |  |  | 
 | paid | smallint(5) unsigned | NO |  |  | 
 | pauEmail | varchar(64) | NO |  |  | 
 | pauPassword | varchar(32) | NO |  |  | 
 | pauNickname | varchar(24) | NO |  |  | 
 | pauVerify | tinytext | NO |  | JSON | 
 | pauCreated | datetime | NO |  |  | 
 | pauUpdated | datetime | NO |  |  | 
 | pauDeleted | datetime | NO |  |  | 
 | pauStatus | tinyint(3) unsigned | NO |  |  | 
 | pauFailTimes | tinyint(3) unsigned | NO |  | 登陆失败次数 | 
 | pauFailed | datetime | NO | 0000-00-00 00:00:00 | 登陆失败时间 | 
 | pauRoleType | tinyint(3) | NO | 0 | 代理商用户的角色类型 | 
 | pauMobile | varchar(12) | NO |  | 用户手机号。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q    �  �                                                                                                                                        �j�Y  -�from_apiwelife_pay_check|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | pcid | int(10) unsigned | NO |  |  | 
 | paid | int(11) | NO | 0 | 代理商id | 
 | paName | varchar(128) | NO |  | 代理商名字 | 
 | pcDay | int(11) | NO | 0 | 日期（20170101） | 
 | pcSourceType | int(11) | NO | 0 | 订单来源（2：硬pos（盒子）；6：旺pos） | 
 | pcPayType | int(11) | NO | 0 | 支付方式（2:银行卡、3:微信、4:支付宝） | 
 | pcOrderCount | int(11) | NO | 0 | 订单数量 | 
 | pcOrderFee | int(11) | NO | 0 | 总金额（单位：分） | 
 | pcCreated | datetime | NO | 1997-01-01 00:00:00 | 创建时间 | 
 | pcUpdated | datetime | NO | 1997-01-01 00:00:00 | 更新时间 | 
 | pcStatus | int(11) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��Q    ext | NO |  |  | 
 | poAuditStatus | tinyint(3) | NO |  |  | 
 | poCrmVersion | tinyint(3) | NO |  |  | 
 | poAuditLogs | text | NO |  |  | 
 | poCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | poUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | poDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | poStatus | tinyint(3) | NO |  |  | 
 | poContractId | varchar(11) | NO |  | 合同编号 | 
 | paServiceId | smallint(6) unsigned | NO | 0 | 服务商id | 
 | poServicePrice | int(10) unsigned | NO | 0 | 服务费，单位：分 | 
 | poIsX1BizRenew | tinyint(3) unsigned | NO | 0 | 是否为原x1商家续约 | 
 | poRefundPrice | int(10) unsigned | NO | 0 | 订单累计退款金额 | 
 | poPayTime | datetime | NO | 0000-00-00 00:00:00 | 商户付款时间。 | 
 | poPayType | tinyint(3) unsigned | NO | 0 | 付款渠道，1：支付宝、2：联动优势、3：银行账户。 | 
 | poPayNum | varchar(100) | NO |  | 付款单号。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
cY��P    int(3) unsigned | NO |  | 代理商状态，1、正常，2、（大上单系统）待收保证金。 | 
 | paType | tinyint(4) unsigned | NO | 1 | 代理商类型1常规,2直营 | 
 | paServiceInfos | text | NO |  | 代理商服务信息，多字段打包形式，JSON。 | 
 | buid | mediumint(8) unsigned | NO |  | 大上单系统，BOSS用户ID。 | 
 | paPrids | tinytext | NO |  | 大上单系统，代理商可售产品线ID列表。 | 
 | paPayMode | tinyint(3) unsigned | NO |  | 大上单系统，付款方式：1、一次付清，2、多次付款。 | 
 | paLicensePhotos | tinytext | NO |  | 大上单系统，代理商营业执照。 | 
 | paBankAccountPhotos | tinytext | NO |  | 大上单系统，开户许可证照片。 | 
 | paVisable | tinyint(4) | NO | 0 | 是否对外展示代理商 | 
 | paBizLogos | text | NO |  | 代理商下的商户logo | 
 | paWeight | int(11) | NO | 0 | 排序展示权值，越大排序越靠前 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P   � �                                                                                                                                                                                                                                                                                                                                                                                                                                           �?�V  7�+from_apiwelife_partner_orders|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | poid | int(11) unsigned | NO |  |  | 
 | poSn | varchar(18) | NO |  | 订单号用于展示 | 
 | bid | bigint(20) | NO |  |  | 
 | paid | smallint(6) | NO |  |  | 
 | poServiceMonths | int(11) | NO |  |  | 
 | poOnline | datetime | NO |  |  | 
 | poOffline | datetime | NO |  |  | 
 | poPrice | int(11) | NO |  |  | 
 | poSaleman | varchar(20) | NO |  |  | 
 | poContract | mediumblob | NO |  |  | 
 | poSids | text | NO |  |  | 
 | poPreOffline | t      auTP/8ipZ7RPb4ai16jGz3Sq5Hmmvlyx+j+7WUYjkOquX1svH2AeS/IOlzQlPywrmg6Q1/tApU2t6e+/8boLpHmY9IApGq8XjDru8bxMoYje6tgAI4nBLL1vEwWDo03D/s179PHy2enILV5utrBUzBFFg5KW/+QlSW2yLIsklm2yLDF8BD8ACsO9Q0A2bxy02EOCOqGrNKNI7rUsjp34YTm+j2Xs1O2Oa1146jiCLTaAZIbTsrlVNkJSFZ/I60DdEEUGbfOpTMri7TxktQOIRd585BUlhARvbzL1jWbjseiawcna/t08ZW7p6nJs02z+dYueuLLwGmrICiiZv0pXVyhj46gkaDmeR2HSKtCFnat5/es6t2+Jom07gR2JgHLwymwIy53cGTs0h0HhuW4s/k5Tyc780b3AfRlenqaAaEjs5duFrL6WDIvyQqaYcGDRkpNq7qLibwLZhMJTemjvOd96Uk2Lyv5mTtghWfflxozUkrKxBV7CX9Z0eLwmbOJ8Wwhl81o9s51QfT5A55gaGSUv+E544Wv35i7JKVzY057InH9px9/+c5/LT0lRiev8NGvfhAmJq86hFsR6Ihj6VpE8IvBET8fEIMOAl2IBIQZOS7IshAKxAMJUR4N+RTfqDiTkPyCqCRCDhFUjdiiOWpwHPhhX1B76MuH0sr5bnwo/Q7SwZj3L+RnRHUFVfL5ePZUUt7DnsJpLemi+Il+jd8+Ja9o7v7sKVBI6QM+sanx8SuxGC7m5pzEZOHA6DYhQTY/DpnhrTip/2G128brLXOj7IE1D+Nqbe7CZcb7A5WS+089GB9vKUSwb5UzMeBhdNfJ/U1cjsET8ZkgZHvP2n/mcfJOaMl+mH7yd5u03PYytLllbrZQN3xV/k2s/9bqAqlup1R5wEEQRV4QfIGRgE8I8kIwJAZDAyH0OzllwENWpUxOzSQHWJry62BYV3mnCKz0/9Um8Lx4cXkoNDQAH4mTF1WrXSa9edLtXlB3ppBK4Sk+AS/0K9M=cY��&    u � u                                                                                                         ��n 	1�Ushowdoc	当日储值统计
    
**简要描述：** 

- 当日储值统计，是能统计当日00:00至23:59:59的储值统计
注意：储值统计charge包含了撤销储值统计charge_cancel的部分，如果需要实际储值，需要进行相减


**请求URL：** 
- ` /charge/today `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----  |:---  |:---|:----- |-----   |
 | begin_time | date | 起始时间 | 时间 |  是 |
 | end_time | date | 截止时间 | 时间 |  是 |
  | shop_id | int | 门店id | 数字 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
      &quot;shop_offline&quot;: {
        &quot;charge_cancel&quot;: {
     %��m 	1�gshowdoc	储值记录详情
    
**简要描述：** 

- 查询指定流水号储值记录�   H                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               �o�T  ?�from_apiwelife_partner_order_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | poid | int(11) unsigned | NO |  | 订单id | 
 | bid | bigin  #    �  �                                                                                                                                   �o�U  E�}from_apiwelife_partner_order_refunds|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  | primary key | 
 | poid | int(10) unsigned | NO |  | 订单id | 
 | bid | bigint(20) unsigned | NO |  | 商家id | 
 | paid | smallint(5) unsigned | NO |  | 代理商id | 
 | paServiceId | smallint(5) unsigned | NO |  | 服务商id | 
 | porPrice | int(10) unsigned | NO |  | 退款金额 | 
 | porChannel | tinyint(3) unsigned | NO |  | 退款渠道 | 
 | porSn | varchar(100) | NO |  | 退款序列号 | 
 | porRemark | text | NO |  | 退款备注 | 
 | porCreated | datetime | NO |  |  | 
 | porUpdated | datetime | NO |  |  | 
 | porDeleted | datetime | NO |  |  | 
 | porStatus | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | IsDeleted | tinyint(4) | NO |  |  | 
cY��P    t(20) unsigned | NO |  | 商家id | 
 | paid | smallint(6) | NO |  | 代理商id | 
 | paServiceId | smallint(6) unsigned | NO | 0 | 服务商id | 
 | poServiceMonths | int(11) unsigned | NO |  | 服务月数 | 
 | poOnline | date | NO | 0000-00-00 | 上线时间 | 
 | poOffline | date | NO | 0000-00-00 | 下线时间 | 
 | poPrice | int(11) unsigned | NO |  | 订单金额 | 
 | poServicePrice | int(10) unsigned | NO | 0 | 服务费，单位：分 | 
 | poSid | int(11) unsigned | NO |  | 订单门店 json数据 | 
 | poPreOffline | date | NO | 0000-00-00 | 订单中门店的原下线时间，json数据 | 
 | poCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | poUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | poDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | poStatus | tinyint(3) | NO |  | 状态 | 
 | poIsX1BizRenew | tinyint(3) unsigned | NO | 0 | 是否为原x1商家续约 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P    O  O                                                                     �-�S  A�}from_apiwelife_partner_action_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | palId | int(10) unsigned | NO |  |  | 
 | palDesc | varchar(32) | NO |  | 操作描述 | 
 | palAction | varchar(50) | NO |  | 操作的controller.action | 
 | targetId | varchar(64) | NO |  | 目标id | 
 | ip | varchar(15) | NO |  | 操作ip | 
 | palParams | text | NO |  | 请求参数 | 
 | pauid | int(10) unsigned | NO |  | 代理商用户 | 
 | paid | smallint(5) unsigned | NO |  | 操作者 | 
 | pauEmail | varchar(64) | NO |  | 操作者用户名 | 
 | palStatus | tinyint(1) unsigned | NO |  | 数据状态 | 
 | palCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | palUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | palDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P    NO |  |  | 
 | nmcFee | int(10) unsigned | NO |  | 消费金额 | 
 | nmcType | tinyint(3) unsigned | NO |  | 消费类型：2消费、3撤销消费、4被撤销消费 | 
 | nmcRelateId | bigint(20) unsigned | NO |  | 撤销消费关联的被撤销消费的id | 
 | nmcThirdId | varchar(64) | YES |  |  | 
 | nmcSourceType | tinyint(3) unsigned | NO |  | 交易来源 1微信 2支付宝 | 
 | nmcPayType | tinyint(3) unsigned | NO |  | 支付方式：支付宝、微信等 | 
 | nmcPayStatus | tinyint(3) unsigned | NO |  | 支付状态 | 
 | nmcHandle | int(10) unsigned | NO |  | 收银员id | 
 | nmcCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | nmcUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | nmcDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | nmcStatus | tinyint(4) | NO |  | 消费状态：1预消费 2消费完成 | 
 | nmcPrintNumber | int(5) unsigned | NO |  | 打印次数 | 
 | nmcRemark | text | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P    nyint(3) unsigned | NO |  |  | 
 | palMoney | int(10) unsigned | NO |  |  | 
 | palSaving | int(10) unsigned | NO |  |  | 
 | poid | int(10) unsigned | NO |  |  | 
 | palOPalid | int(10) unsigned | NO |  | 撤销充值时，记录的原始充值日志ID。 | 
 | palRemitMode | tinyint(3) unsigned | NO |  | 汇款方式，1：银行汇款，2：现金汇款。 | 
 | palRemitter | varchar(16) | NO |  | 充值的话，汇款人。 | 
 | palRemitDate | date | NO |  | 汇款日期。 | 
 | palRemark | varchar(255) | NO |  | 备注信息。 | 
 | palCreator | int(10) unsigned | NO |  | 操作者管理员ID。 | 
 | palPayer | varchar(16) | NO |  |  | 
 | palCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | palUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | palDeleted | datetime | NO |  | ɾ | 
 | palStatus | tinyint(3) unsigned | NO |  | ״̬ | 
 | palPayTime | datetime | NO | 0000-00-00 00:00:00 | 欲统计至的日期。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P   z z                                                                                                                                                                                                                                                                                                                                                                                ��R  ;�-from_apiwelife_partner_accounts|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | paid | smallint(5) | NO |  |  | 
 | paCharge | int(10) unsigned | NO |  |  | 
 | paSaving | int(10) unsigned | NO |  |  | 
 | paLastOrderTime | datetime | NO | 0000-00-00 00:00:00 |  | 
 | paCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | paUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | paDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | paStatus | tinyint(3) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P    � � �                                                                                                                                                                                                       �q�Q  C�from_apiwelife_partner_account_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | palid | int(10) unsigned | NO |  | primary key | 
 | paid | smallint(5) unsigned | NO |  |  | 
 | palType | ti  &�$�P  K�afrom_apiwelife_partner_account_invoices|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | paiid | int(10) unsigned | NO |  | primary key | 
 | palid | int(10) unsigned | NO |  | 相关的充值记录ID。 | 
 | paiType | tinyint(3) unsigned | NO |  | 发票类型，1：普通发票，2：专用发票。 | 
 | paiNo | varchar(32) | NO |  | 发票号码。 | 
 | paiTitle | varchar(64) | NO |  | 发票抬头。 | 
 | paiContent | varchar(128) | NO |  | 发票内容。 | 
 | paiMoney | int(10) unsigned  )     | NO |  | 发票金额。 | 
 | paiCertImg | mediumblob | NO |  | 一般纳税人认定，证书或证明文件 | 
 | paiTaxCopyImg | mediumblob | NO |  | 税务登记证副本 | 
 | paiBankLicenseImg | mediumblob | NO |  | 银行开户许可证 | 
 | paiBuyCorp | varchar(64) | NO |  | 购买方公司名称 | 
 | paiTaxpayerNo | varchar(32) | NO |  | 纳税人识别号 | 
 | paiCoAddress | varchar(64) | NO |  | 公司注册地址 | 
 | paiCoTel | varchar(16) | NO |  | 公司座机电话 | 
 | paiCoBank | varchar(32) | NO |  | 公司开户行 | 
 | paiCoBankNo | varchar(24) | NO |  | 公司银行账号 | 
 | paiRemark | varchar(128) | NO |  | 备注。 | 
 | paiCreator | int(10) unsigned | NO |  | 操作者。 | 
 | paiCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | paiUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | paiDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | paiStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P   W W                                                                                                                                                                                                                                                                                                                                             �%�6  K�cfrom_apidprpt_dpdm_welife_trade_charges|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | uid | bigint(40) | YES |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | YES |  |  | 
 | tcCharge | bigint(20) | NO |  |  | 
 | tcSale | bigint(20) | NO |  |  | 
 | tcChargeType | int(3) | NO |  |  | 
 | tcSaving | bigint(20) | NO |  |  | 
 | tcExpired | varchar(50) | YES |  |  | 
 | tcType | int(3) | NO |  |  | 
 | tcRelateId | varchar(50) | YES |  |  | 
 | tcCreated | varchar(50) | NO |  |  | 
 | tcUpdated | varchar(50) | YES |  |  | 
 | tcDeleted | varchar(50) | YES |  |  | 
 | tcStatus | int(1) | NO |  |  | 
cY��"    E  E    �  /  .  1  2  4  3  5  6  7  9  8  : �7�M  '�+from_apiwelife_module|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ModuleId | int(11) unsigned | NO |  | primary key | 
 | Text | varchar(100) | NO |  | 名称 | 
 | Type | tinyint(4) unsigned | NO | 1 | 类型1-入口型 2-昨日经营概况 3-当前会员组成 4累计未使用储值 | 
 | NavigateUrl | varchar(500) | YES |  | 入口型的跳转url | 
 | IconUrl | varchar(500) | YES |  | 入口型的图标url | 
 | Sequence | tinyint(4) unsigned | NO | 0 | 序号，用于排序越小排的越前 | 
 | ModuleCode | int(11) unsigned | NO | 1023 | 对应mCashierPermission，收银员的权限；消费-1，撤销消费-2，充值-4，积分-8，撤销积分-16，其他1023 | 
 | Status | tinyint(4) unsigned | NO | 1 | 0-无效，1-正常 | 
 | AddTime | timestamp | NO | 0000-00-00 00:00:00 | 添加时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 最后修改时间 | 
cY��P
   ^  (08@HPX`hpx����������������  (08@HPX`hpx����������������  (08@HPX`hpx�����������������������         � � � � � � � � � � � ���������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������
   \  8@HPX`hpx����������������  (08@HPX`hpx����������������  (08@HPX`hpx����������������0(   � � � � �      ==<<;;::9988776655BBAA@@������������������������������������������������������  

  !!""##$$%%&&''(())**++,,--..//001122??445566778899::;;<<==>>   � �                                                                                                                                                                                                                                                                                                                                                                                                                                 �Q�I  1�Ufrom_apiwelife_member_mxi1|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | uName | varchar(128) | NO |  | ???? | 
 | uPhone | char(11) | NO |  | ?绰 | 
 | uGender | tinyint(3) unsigned | NO | 0 | ?Ա? 1?? 2 Ů | 
 | uBirthDay | char(10) | NO |  | ???? | 
 | uNo | varchar(64) | NO |  |  | 
 | uRegistered | datetime | NO | 0000-00-00 00:00:00 | ????ʱ?? | 
 | tcSaving | int(11) unsigned | NO |  | ???ȴ?ֵ??ʣ?????? | 
 | sid | int(10) unsigned | NO | 0 | ?ŵ?ID | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O    � �< �                                                                                                                                                                  � �L  +�9from_apiwelife_messages|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | msgMessag  �d�K  ?�mfrom_apiwelife_merge_actual_cards|字段|类型|空|默认|注释|
|:----    |:-------     ��Q�J  1�Ufrom_apiwelife_member_mxi2|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | uName | varchar(128) | NO |  | ???? | 
 | uPhone | char(11) | NO |  | ?绰 | 
 | uGender | tinyint(3) unsigned | NO | 0 | ?Ա? 1?? 2 Ů | 
 | uBirthDay | char(10) | NO |  | ???? | 
 | uNo | varchar(64) | NO |  |  | 
 | uRegistered | datetime | NO | 0000-00-00 00:00:00 | ????ʱ?? | 
 | tcSaving | int(11) unsigned | NO |  | ???ȴ?ֵ??ʣ?????? | 
 | sid | int(10) unsigned | NO | 0 | ?ŵ?ID | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O   Z   =   d  I  G  F      e  E  H  P  C  A  D  @  ?  <  >  =  ;  8  :  9  7  B  5  6  3  4  2  1  /  �  +    ,  %  (  )  &  '  $  .  !  #  "                               �   �   E   d      
        	                    a   %   e  ,      b   `   H   �   �   �   �   �   �   �   �   �   �   �   �   b   a   �   c   �   �   �   �   �   i   I   j   i   m   �   �   H   `   ^   �   �   &   �   ;   �   /   .   -   0   6   '   �   �   g   )   ]   6   �   <   -   .   /   �   /   2  �   �   �   �   :   �   3   �   5   4   7   5   6   g   8   *   9   �   <   =   u   >   ?   1   s   A   B  �  �   q  �   �   �   �   {   k   ;   v   �   �   �   �   �  �   �   �   �   �   �   �   �  �   q   �   �  M   �   �   @   �   �om_apiwelife_group_consume_records|字段|类型|空|默认|注释|
|:----    |:-------  G��0  9�cfrom_apiwelife_group_companies|字段|类型|空|默认|注释|
|:----    |:-------    |:  I   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                �2�H  1�from_apiwelife_member_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | bigint(20) | NO |  | id | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | uid | bigint(20) | NO | 0 | 用户ID | 
 | cNo | bigint(20) | NO | 0 | 卡号 | 
 | content | text | NO |  | 操作详情 | 
 | operator | int(11) | NO | 0 | 操作人ID | 
 | created | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | status | tinyint(4) | NO | 1 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O   � �                                                                                                                                                                                                                                                                                                                                                                                                                            �V�G  A�Ofrom_apiwelife_mc_daily_report_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | Id | int(11) unsigned | NO |  | primary key | 
 | JobId | int(11) unsigned | NO |  | welife_mc_daily_report_job表的主键 | 
 | Status | tinyint(4) unsigned | NO |  | 发送的状态, 0失败，1成功 | 
 | Msg | varchar(8192) | YES |  | 发送的原始消息 | 
 | Reason | longtext | YES |  | 失败的原因 | 
 | AddTime | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 最近更新时间 | 
cY��O   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                    �>�E  9�'from_apiwelife_mc_access_token|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | Id | int(11) unsigned | NO |  | primary key | 
 | AppId | varchar(64) | NO |  | 微信的appId | 
 | AppSecret | varchar(256) | NO |  | 微信的secret | 
 | AccessToken | varchar(1024) | NO |  | access token | 
 | ExpireTime | datetime | NO | 0000-00-00 00:00:00 | access token的过期时间 | 
 | AddTime | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 最近更新时间 | 
cY��O   � �                                                                                                                                                                                                                                                                                                                                                                                                                                  �P�F  A�Cfrom_apiwelife_mc_daily_report_job|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | Id | int(11) unsigned | NO |  | primary key | 
 | BindId | int(11) unsigned | NO |  | welife_mc_access_token表的主键 | 
 | OpenId | varchar(64) | NO |  | 微信的openId | 
 | ShopAccountId | int(11) | NO |  | 商家账号id | 
 | Status | tinyint(1) unsigned | NO | 0 | 任务状态，0失败，1成功 | 
 | AddTime | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 最近更新时间 | 
cY��O                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �t�D  7�from_apiwelife_manual_account|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | tcId | bigint(20) unsigned | NO | 0 | 流水号 | 
 | bid | int(11) unsigned | NO | 0 | 商户id | 
 | sid | int(11) unsigned | NO | 0 | 门店id | 
 | uid | bigint(20) unsigned | NO | 0 | 用户id | 
 | maCardNo | varchar(64) | NO |  |  | 
 | maPhone | char(11) | YES |  | 卡号/手机号 | 
 | maType | tinyint(3) unsigned | NO | 0 |  6     操作类型：1增加 2扣减 | 
 | maFormType | tinyint(3) unsigned | NO | 0 | 操作来源 1储值 2积分 3券 | 
 | maCharge | int(11) unsigned | NO | 0 | 调整储值额 | 
 | maCredit | int(11) unsigned | NO | 0 | 调整积分份额 | 
 | maCoupon | text | NO |  | 调整优惠券 | 
 | maNumber | tinyint(3) unsigned | YES | 0 | 优惠券数量 | 
 | maFormMid | bigint(20) unsigned | NO |  | 提交人ID | 
 | maMid | char(20) | NO |  | 审核人ID | 
 | maCause | varchar(100) | NO |  | 驳回原因 | 
 | maRemark | varchar(100) | NO |  | 备注项 | 
 | maStatus | tinyint(3) unsigned | NO | 0 | 0待审核 1审核 2驳回 | 
 | maCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | maUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | maDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | maReceipts | int(11) unsigned | NO | 0 | 调整储值实收额 | 
 | maReward | int(11) unsigned | NO | 0 | 调整储值奖励额 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O    �  �                                                                                                                          �x�C  ?�from_apiwelife_manager_update_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | mulId | int(11) unsigned | NO |  |  | 
 | mulShopTime | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | mulDescribe | varchar(100) | NO |  | 功能概述 | 
 | mulAdd | text | NO |  | 新增功能 | 
 | mulOptimize | text | NO |  | 优化功能 | 
 | multitle | varchar(100) | NO |  | 标题描述 | 
 | mulConDescribe | varchar(100) | NO |  | 内容描述 | 
 | mulImg | varchar(200) | NO |  |  | 
 | mulCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mulUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mulStatus | tinyint(3) unsigned | NO |  |  | 
 | mulDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mulEditor | varchar(32) | NO |  | 编辑人 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O   � �                                                                                                                                                                                                                                                                                                                                                                                                                                �R�A  5�Sfrom_apiwelife_manager_multi|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | mmid | int(11) unsigned | NO |  | primary key | 
 | mmPhone | char(11) | NO |  |  | 
 | mmManagers | varchar(1000) | NO |  |  | 
 | mmPassword | varchar(32) | NO |  | 密码md5 | 
 | mmStatus | tinyint(3) | NO |  |  | 
 | mmCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mmUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mmDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O    J  J                                                                �2�B  +�from_apiwelife_managers|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | mid | int(20) unsigned | NO |  |  | 
 | bid | int(20) unsigned | NO |  |  | 
 | sid | int(20) unsigned | NO |  |  | 
 | mName | varchar(20) | NO |  |  | 
 | mPhone | char(11) | NO |  |  | 
 | mRoleId | tinyint(3) | NO |  |  | 
 | mShops | text | NO |  |  | 
 | mStatus | tinyint(3) | NO |  |  | 
 | mCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | mCashierPermission | int(11) | NO |  |  | 
 | mPassword | varchar(32) | NO |  | 密码md5 | 
 | mAliasName | varchar(24) | NO |  | 别名默认手机号 | 
 | mIsRegion | tinyint(1) unsigned | NO | 0 | 是否为区域店长。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O     |:--- |-- -|------      |
 | mllId | int(10) unsigned | NO |  | primary key | 
 | mllKey | varchar(32) | NO |  | memcache | 
 | sid | int(11) unsigned | NO |  | 门店id | 
 | ip | varchar(16) | NO |  | ip | 
 | mid | int(11) unsigned | NO |  | 大众账号 | 
 | mllExpired | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mllCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mllUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mllDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mllStatus | tinyint(3) unsigned | NO |  |  | 
 | mllBrowser | varchar(255) | NO |  | 浏览器 | 
 | mllOs | varchar(20) | NO |  |  | 
 | bid | int(10) unsigned | NO |  | 商家id | 
 | mllLoginWay | varchar(20) | NO |  |  | 
 | mllFailTimes | tinyint(10) unsigned | NO |  | 登陆失败次数 | 
 | mllFailTime | datetime | NO | 0000-00-00 00:00:00 | 登陆失败时间 | 
 | mllSmId | varchar(32) | NO |  | ypos设备唯一sm序号 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O                �                                                                                                                                                                                                                                                                                 �W�@  ?�Sfrom_apiwelife_manager_login_logs|字段|类型|空|默认|注释|
|:----    |:-------     :�p�?  A�from_apiwelife_manager_lightweight|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | mlId | int(11) unsigned | NO |  |  | 
 | bid | int(11) unsigned | NO |  |  | 
 | sid | int(11) unsigned | NO |  |  | 
 | mid | int(11) unsigned | NO |  |  | 
 | openid | varchar(32) | NO |  |  | 
 | mlStatus | tinyint(3) unsigned | NO | 0 |  | 
 | mlCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mlUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mlDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O    �  �                                                                                                                                                                                                                                                   ��=  ;�'from_apiwelife_manage_resources|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | mrid | int(10) unsigned | NO |  |  | 
 | mrUrl | varchar(50) | NO |  | 链接 | 
 | mrText | varchar(254) | NO |  | 资源名称 | 
 | mrModule | varchar(20) | NO |  | 资源模块 | 
 | mrIcon | varchar(20) | NO |  | 资源图标 | 
 | mrHighLight | text | NO |  | 资源高亮 | 
 | mrIsSidebar | tinyint(3) unsigned | NO | 0 | 是否属于菜单 | 
 | mrStatus | tinyint(3) | NO |  |  | 
 | mrCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mrUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | mrDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��O                                                                                                                                                                                                                                                                       �o�>  ;�from_apiwelife_manager_keycodes|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | 自增主建 | 
 | mid | int(10) | NO |  |  | 
 | bid | int(11) unsigned | NO | 0 | 商家id | 
 | sid | int(10) unsigned | NO | 0 | 门店id | 
 | mkKeyCode | int(20) | NO | 0 | 验证码，6位 | 
 | mkStatus | tinyint(3) | NO |  | 状态，0未使用，1已使用 | 
 | mkCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | mkUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | mkDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | IsDeleted | tinyint(3) unsigned | NO |  |  | 
cY��O      |:--- |-- -|------      |
 | malId | int(10) unsigned | NO |  | 主键 | 
 | malUri | varchar(40) | NO |  | 操作uri | 
 | malDesc | varchar(32) | NO |  | 操作描述 | 
 | malParams | text | NO |  | 操作参数 | 
 | mid | int(10) unsigned | NO |  | 管理员id | 
 | bid | int(10) unsigned | NO |  | 商家id | 
 | ip | varchar(16) | NO |  |  | 
 | malCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | malUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | malDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | malStatus | tinyint(3) | NO |  | 数据状态 | 
 | mName | varchar(32) | NO |  | 操作员名称 | 
 | malActionWay | varchar(20) | NO |  | 操作途径来源 | 
 | sid | int(10) unsigned | NO |  | 操作门店 | 
 | targetId | varchar(64) | NO |  | 目标id | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N                                                                                                                         � ( �                                                                                                                                                                             �n�<  A�from_apiwelife_manager_action_logs|字段|类型|空|默认|注释|
|:----    |:-------    >�T�;  M�?from_apiwelife_manager_action_logs_bak22|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | malId | int(10) unsigned | NO |  | primary key | 
 | malUri | varchar(40) | NO |  |  | 
 | malText | varchar(32) | NO |  |  | 
 | malParams | text | NO |  |  | 
 | mid | int(11) | NO |  |  | 
 | bid | int(11) | NO |  |  | 
 | ip | varchar(16) | NO |  |  | 
 | malCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | malUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | malRemoved | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | malStatus | tinyint(3) | NO |  |  | 
 | mName | varchar(32) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N   q q                                                                                                                                                                                                                                                                                                                                                                       ��:  ;�?from_apiwelife_manage_authority|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | maRoleId | int(3) unsigned | NO |  |  | 
 | maResourceId | int(5) unsigned | NO |  |  | 
 | maIsRegion | tinyint(3) unsigned | NO |  | 是否区域经理 | 
 | maCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | maUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | maDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | maStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N     | text | NO |  | x1到a1的门店映射关系array(array('x1sid'=&gt;'','a1sid'=&gt;''),..) | 
 | chargeFlag | tinyint(3) | NO |  | 是否导入充值 | 
 | creditFlag | tinyint(3) | NO |  | 是否导入积分 | 
 | creditTransFlag | tinyint(3) unsigned | NO | 0 | 1将X1积分按比例转换；0:直接迁移 | 
 | gradeFlag | tinyint(3) unsigned | NO | 0 | 1:导入等级；0:不导入 | 
 | gradeNames | varchar(1024) | NO |  | 导入的X1等级名称列表 | 
 | created | datetime | NO | 0000-00-00 00:00:00 |  | 
 | updated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | deleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | status | tinyint(3) unsigned | NO |  |  | 
 | importStatus | tinyint(3) unsigned | NO |  | 商家导入状态 | 
 | lockUserFlag | tinyint(3) unsigned | NO |  | 是否导入锁定会员 | 
 | expiredUserFlag | tinyint(3) unsigned | NO |  | 是否导入过期会员 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | companyName | varchar(128) | YES |  | 公司名称 | 
cY��N    y � y                                                                                                             �B�8  9�/from_apiwelife_import_data_x1s|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | x1bid | varchar(64) | NO |  | 线 | 
 | tbid | bigint(20) unsigned | NO |  | 2.0的bid | 
 | bid | int(11) unsigned | NO |  | a1 bid | 
 | sidsMap  A�5�7  ;�from_apiwelife_import_data_maps|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | acNo | bigint(20) | NO |  |  | 
 | uid | bigint(20) | NO |  |  | 
 | newId | bigint(20) | NO |  |  | 
 | oldId | varchar(128) | NO |  |  | 
 | type | varchar(16) | NO |  |  | 
 | created | datetime | NO |  |  | 
 | updated | datetime | NO |  |  | 
 | deleted | datetime | NO |  |  | 
 | status | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N   � �                                                                                                                                                                                                                                                                                                                                                                                                                                  �P�6  !�cfrom_apiwelife_ids|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | idName | varchar(40) | NO |  | id | 
 | idCurrentValue | int(11) unsigned | NO |  |  | 
 | cas | int(11) unsigned | NO |  | cas | 
 | idCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | idUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | idDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | idStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N    5  5                                           �G�9  ?�3from_apiwelife_lightweight_orders|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | loId | varchar(16) | NO |  | 订单号 | 
 | bid | int(11) unsigned | NO |  |  | 
 | poids | varchar(512) | NO |  | partner_orders的ids | 
 | loPayMoney | int(11) unsigned | NO |  | 支付金额，单位为分 | 
 | loPayStatus | tinyint(3) unsigned | NO |  | 支付状态 1未支付2支付成功3支付失败 | 
 | loPayTime | datetime | NO | 0000-00-00 00:00:00 | 支付完成时间 | 
 | loCreator | varchar(32) | NO |  | 订单创建者 | 
 | loPayNo | varchar(32) | NO |  | 第三方交易号 | 
 | loCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | loUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | loStatus | tinyint(3) unsigned | NO |  |  | 
 | loDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N    �  �                                                                                                                                                                                                                                             ��4  ;�3from_apiwelife_guestbook_replys|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | grId | int(11) unsigned | NO |  | primary key | 
 | gmId | int(11) unsigned | NO | 0 | 对应文章表的ID | 
 | guId | int(11) unsigned | NO | 0 | 评论人的ID（对应用户表的ID） | 
 | grReplyto | int(11) unsigned | NO | 0 | 回复者的用户ID | 
 | grContent | text | NO |  | 评论内容 | 
 | grCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | grUpdated | datetime | NO | 0000-00-00 00:00:00 | 修改时间 | 
 | grDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | grStatus | tinyint(3) unsigned | NO | 0 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N   < <                                                                                                                                                                                                                                                                                                                  �@�3  ?�%from_apiwelife_guestbook_messages|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | gmId | int(11) unsigned | NO |  | primary key | 
 | gmTitle | varchar(32) | NO |  | 文章标题 | 
 | gmContent | text | NO |  | 文章详情 | 
 | gmCreated | datetime | NO | 0000-00-00 00:00:00 | 文章的创建时间 | 
 | gmUpdated | datetime | NO | 0000-00-00 00:00:00 | 文章的修改时间 | 
 | gmDeleted | datetime | NO | 0000-00-00 00:00:00 | 文章的删除时间 | 
 | gmStatus | tinyint(3) unsigned | NO | 0 | 文章的状态 | 
 | guId | int(11) unsigned | NO | 0 | 发布者ID | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N        |:--- |-- -|------      |
 | wgcrid | int(10) unsigned | NO |  |  | 
 | tcId | bigint(20) unsigned | NO |  | 相关消费交易ID。 | 
 | bid | int(10) unsigned | NO |  |  | 
 | wgcid | int(10) unsigned | NO |  |  | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | sid | int(10) unsigned | NO |  | 交易门店ID。 | 
 | wgcrAmount | int(10) unsigned | NO | 0 | 集团支付金额（单位为分）。 | 
 | wgarid | int(10) unsigned | NO |  | 相关账户余额变更流水ID。 | 
 | wgcrRepaymentWgarid | int(10) unsigned | NO | 0 | 还款流水ID。 | 
 | wgcrCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | wgcrUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | wgcrStatus | tinyint(3) unsigned | NO | 1 | 支付记录状态：1、已付款，2、未还款，4、已还款，16、已撤销（原状态值可能是1，2，4）。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N                                                                                                 P P                                                                                                                                                                                                                                                                                                                                      �,�5  9�from_apiwelife_guestbook_users|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | guId | int(11) unsigned | NO |  | primary key | 
 | guName | varchar(16) | NO |  | 用户名称 | 
 | guEmail | varchar(64) | NO |  | 用户邮箱 | 
 | guCreated | datetime | NO | 0000-00-00 00:00:00 | 用户创建时间 | 
 | guUpdate | datetime | NO | 0000-00-00 00:00:00 | 用户修改时间 | 
 | guDeleted | datetime | NO | 0000-00-00 00:00:00 | 用户删除时间 | 
 | guStatus | tinyint(3) unsigned | NO | 0 | 用户的状态 | 
 | guPassword | varchar(32) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N    --- |-- -|------      |
 | wgcid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | wgcAccountType | tinyint(3) unsigned | NO | 1 | 1、可挂账，2：不可挂账。 | 
 | wgcOverdraft | int(10) unsigned | NO | 0 | 集团最大挂账额度（单位为分），0为不能挂账。 | 
 | wgcBalance | int(10) unsigned | NO | 0 | 集团的当前可用余额（单位为分），0为无余额。 | 
 | wgcName | varchar(32) | NO |  | 集团名称。 | 
 | wgcContacts | varchar(24) | NO |  | 联系人姓名。 | 
 | wgcMobile | varchar(11) | NO |  | 联系人手机号。 | 
 | wgcSummary | varchar(255) | NO |  | 备注。 | 
 | wgcCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | wgcUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | wgcDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | wgcStatus | tinyint(3) unsigned | NO | 1 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��N                                                                           �  �                                                                                                                                                                                         �9�  3�#from_apiwelife_actual_cards|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | acNo | varchar(64) | NO |  |  | 
 | acbId | int(11) unsigned | NO | 0 | 实体卡号批次id | 
 | bid | int(11) unsigned | NO | 0 | 商户id | 
 | sid | int(11) unsigned | NO | 0 | 门店sid | 
 | uid | bigint(20) unsigned | NO | 0 | 用户id | 
 | acBoundTime | datetime | NO | 0000-00-00 00:00:00 | 绑定时间 | 
 | acCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | acUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | acDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | acStatus | tinyint(3) unsigned | NO | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J    #  � #                       �_�/  E�]from_apiwelife_group_account_records|字段|类型|空|默认|注释|
|:----    |:-------  M�b�.  1�wfrom_apiwelife_grade_rules|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | grid | int(10) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  |  | 
 | grName | varchar(64) | NO |  | VIP会员名称 | 
 | grMode | tinyint(3) unsigned | NO |  | 升级方式。 | 
 | grNum | int(10) unsigned | NO |  | 升级达标量，消费满金额（分）或消费满次数或购买价格（分）。 | 
 | grCardFace | varchar(512) | NO |  | 卡面信息，JSON。 | 
 | grTitle | varchar(24) | NO |  | 特权标题。 | 
 | grPrivileges | varchar(1024) | NO |  | 特权列表，JSON | 
 | grSummaries | varchar(255) | NO |  | 特权限制说明。 | 
 | grCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | grUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | grDeleted | datetime | NO | 0000-00-00 00:00:0  L    0 |  | 
 | grStatus | tinyint(3) unsigned | NO |  | 1：待确认，2：执行中，3：已关闭，9：删除 | 
 | grCrmId | varchar(64) | NO |  | 合作方系统内，对应等级规则的ID，如果有的话。 | 
 | grCrmName | varchar(64) | NO |  | 合作方系统内，对应等级的名称，如果有的话。 | 
 | grSourceGrid | int(10) unsigned | NO | 0 | 此规则由另一个执行中的规则修改而来，确认后还将覆盖原规则。 | 
 | grOrderNum | tinyint(3) unsigned | NO | 1 | 同一商家下的所有用户等级的排序序列号。 | 
 | grChargeFlag | tinyint(3) unsigned | NO | 0 | 布尔值，当前等级是否开启储值功能。 | 
 | grCreditFlag | tinyint(3) unsigned | NO | 0 | 布尔值，当前等级是否开启积分奖励功能。 | 
 | grCreditPrice | int(10) unsigned | NO | 0 | 换得一个积分所需要的消费金额。 | 
 | grMemberDiscount | tinyint(3) unsigned | NO | 0 | 会员折扣 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M   l l                                                                                                                                                                                                                                                                                                                                                                  ��D 	%�Qshowdoc	安全规范**签名算法**
前提
从商家后台获取客户端和服务端通信加密使用的appkey，一个appid对应一个appkey
**sig生成规则**
第一步：将请求参数数组按照key的ASCII码字典序升序排序(递归，子数组也要排序)
请求参数
```
req={&quot;grade&quot;:1,&quot;limit&quot;:20,&quot;offset&quot;:0,”orderby”:{“balance”:”desc”},”coupons”:[12345,67890],”desc”:[]}
```
进行数据排序
```php
//参数数组如下：
array(
	'grade' =&gt; 1,
	'offset' =&gt; 0,
	'limit' =&gt; 20,
	'orderby' =&gt; array(
		'balance' =&gt; 'desc'
    ),
    'coupons' =&gt; array      - -|------      |
 | eid | int(10) unsigned | NO |  | 员工id | 
 | bid | int(10) unsigned | NO |  | 商户id | 
 | sid | int(10) unsigned | NO |  | 门店id | 
 | eName | varchar(128) | NO |  | 员工姓名 | 
 | ePhone | char(11) | NO |  | 员工手机号 | 
 | qrid | varchar(32) | NO |  | 二维码id | 
 | openid | varchar(32) | NO |  | openid | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | eSummary | varchar(512) | NO |  | 关注说明 | 
 | eCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | eUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | eDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | eStatus | tinyint(3) unsigned | NO | 0 | 状态 | 
 | eCode | bigint(20) unsigned | NO | 0 | 员工工号 | 
 | mid | int(10) unsigned | NO | 0 | 创建人id | 
 | ejid | int(10) unsigned | NO | 0 | 职位类别id | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M                                                                                                                0 �0                                                                                                                                                                                                                                                                                                    �v�-  -�#from_apiwelife_employees|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-  N�]�,  7�gfrom_apiwelife_employee_login|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | elid | int(11) unsigned | NO |  |  | 
 | bid | bigint(20) unsigned | NO |  | 商户ID | 
 | sid | int(10) unsigned | NO |  | 门店id | 
 | eid | int(10) unsigned | NO |  | 员工id | 
 | elOpenid | varchar(60) | NO |  | 微信用户oppenid | 
 | elStatus | tinyint(3) unsigned | NO | 1 | 1正常 | 
 | elCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | elUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | elDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
cY��M   + +                                                                                                                                                                                                                                                                                                 �Q�+  5�Qfrom_apiwelife_employee_jobs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ejid | int(10) unsigned | NO |  | 职位类别id | 
 | bid | int(10) unsigned | NO |  | 商户id | 
 | ejName | varchar(128) | NO |  | 职位类别名称 | 
 | ejCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | ejUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | ejDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | ejStatus | tinyint(3) unsigned | NO | 0 | 状态 | 
 | mid | int(10) unsigned | NO | 0 | 创建人id | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | ejEmpCount | int(11) | NO | 0 | 员工数 | 
cY��M  R  |:--- |-- -|------      |
 | ecid | int(10) unsigned | NO |  | 员工提成表 | 
 | bid | int(20) unsigned | NO |  | 商户id | 
 | sid | int(11) unsigned | NO |  | 门店id | 
 | eid | int(10) unsigned | NO |  | 员工id | 
 | eName | varchar(128) | NO |  | 员工姓名 | 
 | qrid | varchar(128) | NO |  | 冗余员工二维码id | 
 | openid | varchar(32) | NO |  | 员工的openid | 
 | ecDate | date | NO |  | 日期 | 
 | ecsCashPercent | float | NO |  | 实收金额占比 | 
 | ecsUseChargePercent | float | NO |  | 使用储值消费占比 | 
 | ecCommissionMoney | int(11) | NO |  | 应发提成金额,单位分 | 
 | ecCommissionCash | int(11) | NO |  | 实发提成金额，单位分 | 
 | ecNewUserNum | int(10) | NO |  | 某员工带动的消费人数 | 
 | ecTotalFee | int(10) | NO |  | 消费总金额 | 
 | ecStorePay | int(10) | NO |  | 使用储值消费金额 | 
 | ecCash | int(10) | NO |  | 实收金额 | 
 | ecIsSend | tinyint(4) | NO | 1 | 是否发放 | 
 | ecStatus | tinyint(4) unsigned |     NO | 0 | 发放状态 | 
 | ecCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ecUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ecDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ecTcids | varchar(3000) | YES |  | 消费表中tcid，某员工带来的消费流水，用,隔开 | 
 | mch_billno | varchar(1024) | YES |  | \t商户发放红包的商户订单号 | 
 | ecClientIp | varchar(128) | NO |  | 客户端ip | 
 | ecNewuserNumber | int(10) | NO | 0 | 新增会员量 | 
 | ecConsumeBonusMoney | int(11) | NO | 0 | 当日消费应提成金额,单位分 | 
 | ecChargeBonusRecommenderMoney | int(11) | NO | 0 | 作为推荐人提成金额 | 
 | ecChargeBonusCashierMoney | int(11) | NO | 0 | 作为收银员提成金额 | 
 | ecChargeTotal | int(11) | NO | 0 | 当日充值金额 | 
 | ecChargeIds | varchar(4000) | NO |  | 充值表的tcId,表示参与充值分成,逗号隔开 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M                                          � .�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   �8�*  A�from_apiwelife_employee_commssions|字段|类型|空|默认|注释|
|:----    |:-------    Q�F�)  O�!from_apiwelife_employee_commssion_setting|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ecsid | int(10) unsigned | NO |  | 规则id,主键 | 
 | bid   T    | int(20) unsigned | NO |  | 商户id | 
 | sids | text | NO |  | 适用门店id | 
 | ecsCashPercentIsUsed | tinyint(3) unsigned | YES | 0 | 实收金额占比是否启用 | 
 | ecsChargePercentIsUsed | tinyint(3) unsigned | NO | 0 | 消费使用储值比例是否启用 | 
 | ecsCashPercent | float | NO |  | 实收金额提成百分比 | 
 | ecsUseChargePercent | float | NO |  | 使用储值消费金额百分比 | 
 | ecsCreated | datetime | NO | 0000-00-00 00:00:00 | 规则创建时间 | 
 | ecsUpdated | datetime | NO | 0000-00-00 00:00:00 | 规则最后更新时间 | 
 | ecsDeleted | datetime | NO | 0000-00-00 00:00:00 | 规则删除时间 | 
 | ecsStatus | tinyint(3) unsigned | NO | 0 | 规则状态 | 
 | ecsCommssionFlag | int(10) unsigned | NO | 0 | 充值提成设置 | 
 | ecsChargeRecommenderPercent | float | NO | 0 | 充值推荐人提成比例 | 
 | ecsChargeCashierPercent | float | NO | 0 | 充值收银员提成比例 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M    �  � �                                                                                                                                �D�(  /�=from_apiwelife_dish_lists|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |  V��'  9�-from_apiwelife_dish_categories|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | dcid | int(10) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  |  | 
 | dcName | varchar(8) | NO |  | 分类的名称。 | 
 | dcOrderNum | smallint(5) unsigned | NO | 0 | 分类的排序值。 | 
 | dcCreated | datetime | NO | 0000-00-00 00:00:00 | 记录创建时间。 | 
 | dcUpdated | datetime | NO | 0000-00-00 00:00:00 | 记录最近一次更新时间。 | 
 | dcDeleted | datetime | NO | 0000-00-00 00:00:00 | 记录的删除时间。 | 
 | dcStatus | tinyint(3) unsigned | NO | 1 | 记录的状态：1：正常，9：已删除。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间。 | 
cY��M    -- -|------      |
 | dlid | int(10) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  |  | 
 | dlName | varchar(16) | NO |  | 菜品名称。 | 
 | dlImage | tinytext | NO |  | 菜品图片。 | 
 | dlPrice | int(10) unsigned | NO | 0 | 菜品单价（分）。 | 
 | dlUnit | varchar(4) | NO |  | 商品单位（比如：份、斤、台）。 | 
 | dlSids | text | NO |  | 菜品在哪些门店上架，以&quot;,&quot;分隔的门店ID列表。 | 
 | dlCategories | tinytext | NO |  | 菜品所属分类以及各所在分类中的展示顺序。 | 
 | dlSold | int(10) unsigned | NO | 0 | 已售数量。 | 
 | dlCreated | datetime | NO | 0000-00-00 00:00:00 | 记录创建时间。 | 
 | dlUpdated | datetime | NO | 0000-00-00 00:00:00 | 记录最近一次更新时间。 | 
 | dlStatus | tinyint(3) unsigned | NO | 1 | 菜品状态：1：正常上架，2：已下架，9：已删除。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间。 | 
cY��M                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �a�&  +�{from_apiwelife_datasets|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | dKey | char(32) | NO |  | md5(配置的key) | 
 | dValue | text | NO |  | 配置的value | 
 | dCreated | datetime | NO | 0000-00-00 00:00:00 | 配置创建时间 | 
 | dUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M    D  D                                                          �8�%  3�!from_apiwelife_credit_rules|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | bid | int(11) unsigned | NO | 0 | 商户id | 
 | crOpenFlag | tinyint(4) | NO |  | 是否开启积分功能 | 
 | crGift | text | NO |  | 发放积分规则 | 
 | crConsume | text | NO |  | 消费积分规则 | 
 | crExpired | date | NO | 0000-00-00 | 积分有效期日期 | 
 | crDescription | text | NO |  | 积分使用说明 | 
 | crCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | crUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | crDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | crStatus | tinyint(4) | NO |  |  | 
 | crConsumeRule | text | NO |  | 积分消费规则内容,礼品名称和数量 | 
 | crExpiredType | tinyint(3) unsigned | NO |  | 积分有效期类型 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             �	�#  )�Mfrom_apiwelife_coupons|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | couponId | int(10) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | cType | tinyint(3) unsigned | NO | 0 | 券类型:1=代  [     |  | 券的菜品id | 
 | cGiftCouponAmountCustom | tinyint(3) | NO | 0 | 礼品券金额是否是固定值，0固定值，1收银员自定义 | 
 | cLimitTotalAmount | int(10) | NO | 0 | 启用金额，满xx元可使用 | 
 | cLimitCuponNumber | int(5) | NO | 0 | 使用券张数限制 | 
 | cMixUse | tinyint(3) | NO | 0 | 是否支持混用，0可混用，1不可混用 | 
 | cFlag | tinyint(3) | NO | 0 | 0自定义code，1非自定义code | 
 | cChannel | tinyint(3) | NO | 0 | 0非群发，1群发 | 
 | cCardImg | varchar(320) | NO |  | 券静态图片 | 
 | cUsingTime | varchar(30) | NO | [&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;0&quot;] | 使用时段 | 
 | mid | int(10) | NO | 0 | 素材id | 
 | cUsingScope | tinyint(3) unsigned | NO | 1 | 使用范围 | 
 | cSubCoupons | varchar(2000) | NO |  | 券包包含的券 | 
 | cBelongToPack | varchar(2000) | NO |  | 券所属全包 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M  Z金券;2=礼品券;3=券包 | 
 | cSids | text | NO |  |  | 
 | cAids | text | NO |  |  | 
 | cName | varchar(50) | NO |  | ȯ | 
 | cAmount | int(11) unsigned | YES | 0 |  | 
 | cValidityType | tinyint(3) unsigned | NO | 0 | 1 | 
 | cStartTime | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cEndTime | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cValidityDate | int(11) unsigned | NO | 0 |  | 
 | cValidityDateUnit | tinyint(3) unsigned | NO | 0 |  | 
 | cSummary | varchar(5000) | NO |  | ȯ | 
 | cCreator | int(10) unsigned | NO |  |  | 
 | cModifier | int(10) unsigned | NO |  |  | 
 | cCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | cStatus | tinyint(3) unsigned | NO | 0 |  | 
 | cLimited | tinyint(3) unsigned | NO | 0 | 券模板限制操作的原因。 | 
 | wcid | varchar(32) | NO |  |  | 
 | cEnabled | tinyint(3) unsigned | NO | 0 | 启用时间 | 
 | cProductIds | varchar(200) | NO                                                                                                                                                                                                                                                                                   �c�$  7�sfrom_apiwelife_credit_expired|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  | primary key | 
 | bid | int(11) unsigned | NO | 0 | 商家id | 
 | ceRuleId | int(11) unsigned | NO | 0 | 积分规则id | 
 | ceYear | char(4) | NO |  | 有效期年份 | 
 | ceExpired | date | NO | 0000-00-00 | 有效期日期 | 
 | ceCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ceUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ceDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ceStatus | tinyint(4) | NO |  |  | 
 | ceExpiredType | tinyint(3) unsigned | NO |  | 积分过期类型 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M    :--- |-- -|------      |
 | c2ulId | int(10) unsigned | NO |  | primary key | 
 | c2ulBatchId | bigint(20) unsigned | NO | 0 | 批次处理id | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | couponId | int(10) unsigned | NO |  |  | 
 | aid | int(10) unsigned | NO |  |  | 
 | uid | bigint(64) | NO |  |  | 
 | c2ulSendNum | int(10) unsigned | NO |  | ȯ | 
 | c2ulSendingStatus | tinyint(1) unsigned | NO | 0 |  | 
 | c2ulCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | c2ulUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | c2ulDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | c2ulStatus | tinyint(1) unsigned | NO | 0 |  | 
 | tcId | bigint(64) | NO |  | 交易流水号 | 
 | originalBid | int(10) unsigned | NO | 0 | 异业活动建券商家 | 
 | c2ulCode | varchar(200) | NO | 0 | 券码字符串，可能是多个 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��M                                                                                                             �  �                                                                                                                                                                  �P�   5�Ofrom_apiwelife_consume_codes|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ccKey | varchar(32) | NO |  | sid_yyyymmddhh_code | 
 | bid | int(10) unsigned | NO |  |  | 
 | sid | int(10) unsigned | NO |  |  | 
 | tcId | bigint(20) unsigned | NO |  | 流水号 | 
 | ccType | tinyint(3) unsigned | NO |  | 1会员消费2非会员消费 | 
 | ccVerified | tinyint(3) unsigned | NO | 0 | 是否已经验证。0未验证 1已经验证 | 
 | ccCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccStatus | tinyint(3) | NO |  |  | 
 | qrid | varchar(32) | NO |  | 二维码qrid | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    �  �                                                                                                                                                                                                                    ��  '�yfrom_apiwelife_cities|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | cid | int(10) unsigned | NO |  |  | 
 | cName | varchar(32) | NO |  |  | 
 | cNamePy | varchar(32) | NO |  |  | 
 | cNameFirstLetter | varchar(30) | NO |  |  | 
 | cCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | cStatus | tinyint(3) | NO |  |  | 
 | cProvinceName | varchar(32) | NO |  | 城市对应的省份 | 
 | cIsHot | tinyint(3) unsigned | NO | 0 | 是否是热门城市 | 
 | cPhoneAreaNum | int(10) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    [  � [                                                                               �z�"  ;�from_apiwelife_coupon2user_logs|字段|类型|空|默认|注释|
|:----    |:-------    |  ]�2�!  ?�	from_apiwelife_contract_recharges|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | cid | varchar(11) | YES |  | 合同号 | 
 | crRechargeman | varchar(64) | YES |  | 付款人 | 
 | crMoney | int(10) unsigned | NO | 0 | 支付金额，单位：分 | 
 | crPayStatus | tinyint(3) unsigned | NO | 0 | 支付状态 | 
 | crPayNo | varchar(28) | NO |  | 财付通交易号 | 
 | crCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | crUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | crDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | crStatus | tinyint(3) unsigned | NO | 0 | 记录的状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    -|------      |
 | crId | int(11) unsigned | NO |  | primary key | 
 | bid | varchar(16) | NO |  | ?̼?id | 
 | crOpenFlag | tinyint(3) | NO |  | ?Ƿ??????????ı????ֶ? | 
 | crContent | text | NO |  | ??ֵ???????ݣ??????̼?ͳһ??ֵ????????????????Ϣ?????崢ֵ???ͣ?json_encode(array('price'=&gt;'','gift'=&gt;''))?? | 
 | crExpired | int(11) unsigned | NO | 0 | ??Ч??ֵ | 
 | crExpiredType | tinyint(3) | NO | 0 | ????Ϣ??λ???ͣ??ꡢ?µȣ? | 
 | crDescription | text | NO |  | ?̼ҹ??????? | 
 | crCreated | datetime | NO | 0000-00-00 00:00:00 | ????ʱ?? | 
 | crUpdated | datetime | NO | 0000-00-00 00:00:00 | ????ʱ?? | 
 | crDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ??ʱ?? | 
 | crStatus | tinyint(3) | NO |  | ״̬ | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | crSids | text | NO |  | 储值规则适用门店id列表，英文逗号分隔 | 
 | crWeixinFlag | tinyint(3) unsigned | NO | 0 | 是否开启线上微信支付 | 
 | crName | varchar(256) | NO |  | 储值规则名称 | 
cY��L    f  f                                                                                            ��  3�]from_apiwelife_charge_rules|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | crId | int(11) unsigned | NO |  | primary key | 
 | bid | varchar(16) | NO |  |  | 
 | crOpenFlag | tinyint(3) | NO |  |  | 
 | crContent | text | NO |  |  | 
 | crExpired | int(11) unsigned | NO | 0 |  | 
 | crExpiredType | tinyint(3) | NO | 0 |  | 
 | crDescription | text | NO |  |  | 
 | crCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | crUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | crDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | crStatus | tinyint(3) | NO |  | ״̬ | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | crSids | text | NO |  | 储值规则适用门店id列表，英文逗号分隔 | 
 | crWeixinFlag | tinyint(3) unsigned | NO | 0 | 是否开启线上微信支付 | 
 | crName | varchar(256) | NO |  | 储值规则名称 | 
cY��L    q  q                                                                                                       ��  9�Afrom_apiwelife_charge_licenses|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | sid | int(11) unsigned | NO |  | 门店id | 
 | bid | int(11) unsigned | NO |  | 商家id | 
 | clTotal | int(11) unsigned | NO | 0 | 累计授信额度 | 
 | clSaving | int(11) unsigned | NO | 0 | 剩余授信额度 | 
 | clWarning | int(11) unsigned | NO | 0 | 预警额度 | 
 | clMobiles | varchar(128) | NO |  | 预警手机号（英文逗号分隔） | 
 | clStatus | tinyint(4) unsigned | NO |  | 授信状态（1授信中2终止储值3授信解除） | 
 | clLicensed | datetime | NO | 0000-00-00 00:00:00 | 授信时间 | 
 | clCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | clUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | clDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    �                                                                                                                                                                                                                                                                                   �m�  =�from_apiwelife_charge_rules_move|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |--   a�d�  ;�qfrom_apiwelife_charge_rule_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | bid | int(11) unsigned | NO | 0 | 商户ID | 
 | crlRuleId | int(11) unsigned | NO |  | 充值规则ID | 
 | crlRuleIds | char(15) | NO |  | 充值规则ID明细 | 
 | crlRule | varchar(500) | NO |  | 充值规则 | 
 | crlCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | crlUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    �  �                                                                                                                                                                                   �?�  A�!from_apiwelife_cashier_fingerprint|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | cfid | int(10) unsigned | NO |  |  | 
 | bid | int(11) unsigned | NO |  |  | 
 | sid | int(11) unsigned | NO |  |  | 
 | mid | int(11) unsigned | NO |  |  | 
 | cfPhone | char(11) | NO |  |  | 
 | cfCashier | varchar(50) | NO |  | 收银员名称 | 
 | cfClient | varchar(254) | NO |  | 客户端 | 
 | cfIp | varchar(20) | NO |  | 客户端ip | 
 | cfTimestamp | int(15) unsigned | NO |  | 首次登录时间戳 | 
 | cfFingerprint | varchar(32) | NO |  |  | 
 | cfCreated | datetime | NO |  |  | 
 | cfUpdated | datetime | NO |  |  | 
 | cfDeleted | datetime | NO |  |  | 
 | cfStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L   5 5                                                                                                                                                                                                                                                                                                           �G�  A�1from_apiwelife_charge_licenses_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | sid | int(11) unsigned | NO |  | 门店id | 
 | bid | int(11) unsigned | NO |  | 商家id | 
 | mid | int(11) unsigned | NO |  | 操作人id | 
 | cllSaving | int(11) unsigned | NO | 0 | 授信额度 | 
 | cllStatus | tinyint(4) unsigned | NO |  | 状态（1增加 2减少） | 
 | cllCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cllUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | cllDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              �,�  9�from_apiwelife_card_categories|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ccid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | ccIsCommon | tinyint(1) unsigned | NO | 0 | 是否普通会员 1 是 0不是 | 
 | ccName | v  j    �  �                                                                                                                                                                        �J�  /�Ifrom_apiwelife_card_rules|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | crid | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | ccid | int(10) | NO |  | 关联卡类型id | 
 | crRegulars | tinytext | NO |  | 规则json串 | 
 | crOrderNum | tinyint(3) unsigned | NO | 1 | 排序 | 
 | crCreated | datetime | NO |  |  | 
 | crUpdated | datetime | NO |  |  | 
 | crStatus | tinyint(3) unsigned | NO |  |  | 
 | crDownCcid | int(10) unsigned | NO | 0 | 降至目标卡类型ID。 | 
 | crDownMethod | int(3) unsigned | NO | 1 | 降级方式 | 
 | crDownPeriod | varchar(20) | NO |  | 降级有效期 | 
 | crDownSaving | int(10) unsigned | NO | 0 | 储值余额小于当前值时候降级 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    �  �                                                                                                                                                                                                         �)�  5�from_apiwelife_boss_managers|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bmid | int(11) unsigned | NO |  | PK | 
 | bmName | varchar(32) | NO |  | 登陆账号，邮箱。 | 
 | bmUserName | varchar(32) | NO |  | 用户名字 | 
 | bmRole | tinyint(3) unsigned | NO |  | 角色（1.管理员 2.城市经理 3.财务管理） | 
 | bmCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bmUpdated | datetime | NO | 0000-00-00 00:00:00 | 修改时间 | 
 | bmDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | bmStatus | tinyint(1) unsigned | NO |  | 记录状态（1.正常，2.禁用，9.删除） | 
 | bmPassword | varchar(32) | YES |  | 密码 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    archar(64) | NO |  | 卡类别名称 | 
 | ccCardType | tinyint(3) unsigned | NO |  | 卡面类别，1：系统自带，2：自定义。 | 
 | ccCardFace | text | NO |  | 卡面定义。 | 
 | ccCardStyle | tinyint(3) unsigned | NO |  | 卡面所选样式 | 
 | ccChargeFlag | tinyint(1) unsigned | NO | 0 | 储值开关 | 
 | ccCreditFlag | tinyint(1) unsigned | NO | 0 | 积分开关 | 
 | ccCreditPrice | int(10) unsigned | NO | 0 | 当前卡类型累计1积分需要消息的金额（元）。 | 
 | ccMemberDiscount | tinyint(3) unsigned | NO |  | 会员价折扣。 | 
 | ccMemberDiscountSids | text | NO |  | 会员价折扣适用门店。 | 
 | ccPrivileges | varchar(1024) | NO |  | 会员特权 | 
 | ccCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | ccStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | ccSelfPayDiscount | tinyint(3) unsigned | NO | 0 | 自助买单折扣 | 
cY��L   / /                                                                                                                                                                                                                                                                                                     �M�  G�7from_apiwelife_boss_manager_resources|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bmrid | int(11) unsigned | NO |  | PK | 
 | bmrController | varchar(100) | NO |  | controller名称 | 
 | bmrAction | varchar(100) | NO |  | action名称 | 
 | bmrDescription | varchar(250) | NO |  | action描述 | 
 | bmrCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bmrUpdated | datetime | NO | 0000-00-00 00:00:00 | 修改时间 | 
 | bmrDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | bmrStatus | tinyint(1) unsigned | NO |  | 记录状态(1.正常 9.删除) | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L    �  �                                                                                                                                                                                                          �(�  Q�cfrom_apiwelife_boss_manager_role2resources|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bmr2rid | int(11) unsigned | NO |  | PK | 
 | bmrid | int(11) unsigned | NO |  | 资源ID | 
 | bmr2rType | tinyint(3) unsigned | NO |  | 区别角色bmRole类型（1.角色ID 2.管理员ID） | 
 | bmRole | int(10) unsigned | NO |  | 当bmr2rType为1时，角色ID；为2时，管理员ID | 
 | bmr2rCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bmr2rUpdated | datetime | NO | 0000-00-00 00:00:00 | 修改时间 | 
 | bmr2rDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | bmr2rStatus | tinyint(1) unsigned | NO |  | 记录状态，1:正常 9:删除 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��L   � �                                                                                                                                                                                                                                                                                                                                                                                         �y�  5�!from_apiwelife_biz_ypos_auth|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | byaAppcode | varchar(10) | NO |  | 硬pos商家appcode | 
 | byaMd5key | varchar(20) | NO |  | 硬pos商家md5key | 
 | bid | int(10) unsigned | NO |  | 商家bid | 
 | byaShopsn | text | NO |  | 硬pos门店与设备对应sn JSON | 
 | byaCreated | datetime | NO |  |  | 
 | byaUpdated | datetime | NO |  |  | 
 | byaDeleted | datetime | NO |  |  | 
 | byaStatus | tinyint(4) | NO | 1 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��K    �  �                                                                                                                                                                   �O�  K�7from_apiwelife_boss_manager_action_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bmalId | int(10) unsigned | NO |  | 主键 | 
 | bmalDesc | varchar(32) | NO |  | 操作描述 | 
 | bmalAction | varchar(50) | NO |  | 操作的controller.action | 
 | targetId | varchar(64) | NO |  | 目标id | 
 | ip | varchar(15) | NO |  | 操作ip | 
 | bmalParams | text | NO |  | 请求参数 | 
 | bmName | varchar(32) | NO |  | 操作者用户名 | 
 | bmalStatus | tinyint(1) unsigned | NO |  | 数据状态 | 
 | bmalCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bmalUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | bmalDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��K    �按位与。 | 
 | bBrandType | tinyint(3) unsigned | NO | 0 | 品牌类型 1 单品牌，2多品牌 | 
 | bHeadImg | varchar(1024) | NO |  | 商家头像logo | 
 | bUseSavingType | tinyint(3) unsigned | YES | 0 | 消费储值使用类型：0验证码1密码 | 
 | bCashierNum | tinyint(3) unsigned | NO | 0 | 收银员个数 | 
 | bOnlineCashierNum | tinyint(3) unsigned | NO | 0 | 收银员在线数 | 
 | bActualNoFormats | varchar(64) | YES |  | 实体卡样式格式。例如0,16;2,16 | 
 | bCustomFields | text | NO |  | 自定义项 | 
 | bFirstConsumeRate | tinyint(3) | NO | 0 | 最后一笔充值的首次消费比例（0表示关闭，正常值在1到100之间） | 
 | bSwitchCard | tinyint(3) | YES | 0 | 是否切换微信原生卡 | 
 | bTradeFuncModules | int(10) unsigned | NO | 1 | 交易验证储值，积分，券 | 
 | bQueueSids | text | NO |  | 等位门店列表 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | bIsMini | tinyint(4) | NO | 0 | 是否是mini版 | 
cY��K  od | NO | 0 | 服务商id | 
 | bActualCardFlag | tinyint(3) unsigned | NO | 0 | 是否开启实体卡 | 
 | bCrmType | tinyint(3) unsigned | NO | 0 | 对接商家类型 1 通卡对接 0 普通商家 | 
 | bCrmId | varchar(64) | NO |  | 对接商家id | 
 | bSummary | text | NO |  | 会员描述 json [{&quot;title&quot;:&quot;title1&quot;,&quot;describe&quot;:&quot;describe1&quot;}] | 
 | bIsOffline | tinyint(3) unsigned | NO | 0 | 商家的上线状态：0：在线，1：已下线。 | 
 | bPayBusiness | int(11) unsigned | NO | 0 | 业务类型 按位与 | 
 | bWxPayInfo | varchar(1000) | NO |  | 微信支付信息，key mchid phone | 
 | bCustomerId | int(10) unsigned | NO | 0 | 阿波罗商户统一平台中的唯一ID。 | 
 | bCustomerAdminId | int(10) unsigned | NO | 0 | 商家客户对接阿波罗后，阿波罗中客户的超管用户ID。 | 
 | bIsX1Biz | tinyint(3) unsigned | NO | 0 | 是否为X1续签商家，0否，1是 | 
 | bFuncModules | int(10) unsigned | NO | 0 | 商家的各功能开关�  r  |  | 
 | bVerifyType | tinyint(3) unsigned | NO |  |  | 
 | bCodeShowType | tinyint(3) unsigned | NO |  |  | 
 | bAddress | varchar(1024) | NO |  |  | 
 | bSourceLogo | text | NO |  |  | 
 | bStyleType | tinyint(3) unsigned | NO |  | 1 | 
 | bCardStyle | tinyint(3) unsigned | NO |  |  | 
 | bDescTitle | varchar(502) | NO |  | ˵ | 
 | bDescContent | varchar(1024) | NO |  | ˵ | 
 | wxid | varchar(32) | NO |  | ΢ | 
 | wxOriginid | varchar(32) | NO |  | ΢ | 
 | bAppid | varchar(32) | NO |  | ΢ | 
 | bSecret | varchar(32) | NO |  | ΢ | 
 | paid | int(10) unsigned | NO |  | Paid | 
 | cid | int(10) unsigned | NO |  |  | 
 | bLopid | int(10) unsigned | NO |  |  | 
 | bPosType | int(10) unsigned | NO |  |  | 
 | bMainTypeId | int(10) unsigned | NO |  | һ | 
 | bSubTypeId | int(10) unsigned | NO |  |  | 
 | bForwardUin | varchar(32) | NO |  |  | 
 | bUserLevels | text | NO |  |  | 
 | bShowUcNo | tinyint(3) unsigned | NO |  |  | 
 | bAppCardWeight | int(10) unsigned | NO |  |  | 
 | bAppCardOnline | tiny  pint(4) unsigned | NO |  |  | 
 | bCardNoType | tinyint(3) unsigned | NO |  |  | 
 | bHasUserInfo | tinyint(3) unsigned | NO |  |  | 
 | bUserLevelState | tinyint(3) unsigned | NO |  |  | 
 | bGetUCNoType | tinyint(3) unsigned | NO |  |  | 
 | bMpBid | int(10) unsigned | NO |  |  | 
 | bUserInfoType | tinyint(3) unsigned | NO |  |  | 
 | bWxAccountType | tinyint(11) unsigned | NO |  | ΢ | 
 | bWxStatus | tinyint(3) unsigned | NO | 0 | 微信账号状态 | 
 | bCustomerUin | int(10) unsigned | NO |  |  | 
 | bStarted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bEnded | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bCrmVersion | tinyint(3) unsigned | NO |  | CRM | 
 | bCreator | int(10) unsigned | NO |  |  | 
 | bCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | bStatus | tinyint(3) unsigned | NO | 0 |  | 
 | bWxToken | char(32) | NO |  | mp Tokenֵ | 
 | paServiceId | smallint(6) unsigne    W                                                                                                                                                                                                                                                                 �2�  #�%from_apiwelife_bizs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | bBrandName | varchar(128) | NO |  | Ʒ | 
 | bBrandNamePy | varchar(256) | NO |  |  | 
 | bType | tinyint(3) unsigned | NO |  q��  -�afrom_apiwelife_bizs_test|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | bBrandName | varchar(128) | NO |  | Ʒ | 
 | bBrandNamePy | varchar(256) | NO |  |  | 
 | bType | tinyint(3) unsigned | NO |  |  | 
 | bVerifyType | tinyint(3) unsigned | NO |  |  | 
 | bCodeShowType | tinyint(3) u  u    ��实体卡 | 
 | bCrmType | tinyint(3) unsigned | NO | 0 | 对接商家类型 1 通卡对接 0 普通商家 | 
 | bCrmId | varchar(64) | NO |  | 对接商家id | 
 | bSummary | text | NO |  | 会员描述 json [{&quot;title&quot;:&quot;title1&quot;,&quot;describe&quot;:&quot;describe1&quot;}] | 
 | bIsOffline | tinyint(1) unsigned | NO | 0 | 商家的上线状态：0：在线，1：已下线。 | 
 | bPayBusiness | int(11) unsigned | NO | 0 | 业务类型 按位与 | 
 | bWxPayInfo | varchar(256) | NO |  | 微信支付信息，key mchid phone | 
 | bCustomerId | int(10) unsigned | NO | 0 | 阿波罗商户统一平台中的唯一ID。 | 
 | bCustomerAdminId | int(10) unsigned | NO | 0 | 商家客户对接阿波罗后，阿波罗中客户的超管用户ID。 | 
 | bIsX1Biz | tinyint(3) unsigned | NO | 0 | 是否为X1续签商家，0否，1是 | 
 | bFuncModules | int(10) unsigned | NO | 0 | 商家的各功能开关，按位与。 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��K  vnsigned | NO |  |  | 
 | bAddress | varchar(1024) | NO |  |  | 
 | bSourceLogo | text | NO |  |  | 
 | bStyleType | tinyint(3) unsigned | NO |  | 1 | 
 | bCardStyle | tinyint(3) unsigned | NO |  |  | 
 | bDescTitle | varchar(502) | NO |  | ˵ | 
 | bDescContent | varchar(1024) | NO |  | ˵ | 
 | wxid | varchar(32) | NO |  | ΢ | 
 | wxOriginid | varchar(32) | NO |  | ΢ | 
 | bAppid | varchar(32) | NO |  | ΢ | 
 | bSecret | varchar(32) | NO |  | ΢ | 
 | paid | int(10) unsigned | NO |  | Paid | 
 | cid | int(10) unsigned | NO |  |  | 
 | bLopid | int(10) unsigned | NO |  |  | 
 | bPosType | int(10) unsigned | NO |  |  | 
 | bMainTypeId | int(10) unsigned | NO |  | һ | 
 | bSubTypeId | int(10) unsigned | NO |  |  | 
 | bForwardUin | varchar(32) | NO |  |  | 
 | bUserLevels | text | NO |  |  | 
 | bShowUcNo | tinyint(3) unsigned | NO |  |  | 
 | bAppCardWeight | int(10) unsigned | NO |  |  | 
 | bAppCardOnline | tinyint(4) unsigned | NO |  |  | 
 | bCardNoType | tinyint(3) unsigned | NO |  |  | 
 | bHasUs  terInfo | tinyint(3) unsigned | NO |  |  | 
 | bUserLevelState | tinyint(3) unsigned | NO |  |  | 
 | bGetUCNoType | tinyint(3) unsigned | NO |  |  | 
 | bMpBid | int(10) unsigned | NO |  |  | 
 | bUserInfoType | tinyint(3) unsigned | NO |  |  | 
 | bWxAccountType | tinyint(11) unsigned | NO |  | ΢ | 
 | bWxStatus | tinyint(3) unsigned | NO | 0 | 微信账号状态 | 
 | bCustomerUin | int(10) unsigned | NO |  |  | 
 | bStarted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bEnded | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bCrmVersion | tinyint(3) unsigned | NO |  | CRM | 
 | bCreator | int(10) unsigned | NO |  |  | 
 | bCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | bStatus | tinyint(1) unsigned | NO | 0 |  | 
 | bWxToken | char(32) | NO |  | mp Tokenֵ | 
 | paServiceId | smallint(6) unsigned | NO | 0 | 服务商id | 
 | bActualCardFlag | tinyint(3) unsigned | NO | 0 | 是否开�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         �Q�  3�Sfrom_apiwelife_biz_selector|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bsid | int(10) unsigned | NO |  | primary key | 
 | bsName | varchar(20) | NO |  | 筛选器名称 | 
 | bid | int(10) unsigned | NO |  | 商家bid | 
 | bsCondition | text | NO |  | 筛选器条件 | 
 | bsTotal |  x     int(11) | NO |  | 满足条件的总用户数 | 
 | bsWxTotal | int(11) | NO |  | 满足条件的微信用户数 | 
 | bsDpTotal | int(11) | NO |  | 满足条件的点评用户数 | 
 | bsUserTotal | int(11) | NO |  | 创建筛选器时商家的用户总数 | 
 | bsShopTotal | text | NO |  | 满足条件的门店用户人数统计 | 
 | bsQueryId | varchar(200) | NO |  | 筛选器查询id | 
 | bsUids | mediumblob | NO |  | 筛选器统计出来的用户id集合 | 
 | bsResultType | tinyint(4) | NO |  | 筛选器统计结果类型 | 
 | bsCreated | datetime | NO |  |  | 
 | bsUpdated | datetime | NO |  |  | 
 | bsDeleted | datetime | NO |  |  | 
 | bsStatus | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | IsDeleted | tinyint(4) | NO | 0 |  | 
 | bsCardTotal | int(11) | NO | 0 | 实体卡用户数量 | 
 | bsSimTotal | int(11) unsigned | NO | 0 | 发短信人数 | 
 | mid | int(10) unsigned | NO |  | 操作员id | 
 | sid | int(10) unsigned | NO |  | 门店id | 
cY��K    门店id | 
 | boPayWay | varchar(20) | NO |  | 支付方式 | 
 | boPayMoney | int(11) unsigned | NO | 0 | 支付金额，单位为分 | 
 | boPayStatus | tinyint(1) unsigned | NO | 0 | 支付状态 1未支付2支付成功3支付失败 | 
 | boHasReceipt | tinyint(3) unsigned | NO | 0 | 是否开发票 | 
 | boType | tinyint(3) unsigned | NO | 0 | 订单类型1短信充值 | 
 | boPayTime | datetime | NO | 0000-00-00 00:00:00 | 支付完成时间 | 
 | boAttach | text | NO |  | 附加信息 | 
 | boDescribe | text | NO |  | 订单描述 | 
 | boPayNo | varchar(32) | NO |  | 第三方交易号 | 
 | boCreator | int(11) unsigned | NO | 0 | 订单创建者 | 
 | boPayAccount | varchar(100) | NO |  | 第三方账号 | 
 | boCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | boUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | boDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | boStatus | tinyint(1) unsigned | NO | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��K    R                                                                                                                                                                                                                                                                               �+�  /�from_apiwelife_biz_orders|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | boId | varchar(16) | NO |  | 订单号 | 
 | bid | int(11) unsigned | NO | 0 | 商家id | 
 | sid | int(11) unsigned | NO | 0 |   y�*�  9�from_apiwelife_biz_orders_assn|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | Id | int(11) | NO |  | primary key | 
 | OrderId | int(11) | NO |  | 微生活订单主键 | 
 | DealOrderId | int(11) | NO |  | 支付中心的订单id | 
 | AddTime | datetime | NO |  | 订单创建创建时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 最近更新时间 | 
cY��K   ' '                                                                                                                                                                                                                                                                                             �U�  5�Yfrom_apiwelife_biz_snapshots|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bsId | int(11) | NO |  | bid,sid or poId | 
 | bsType | tinyint(3) unsigned | NO |  | 快照类型，1商家2门店3订单 | 
 | bsContent | text | NO |  | 快照内容 json array('origin'=&gt;'', 'update'=&gt;'') | 
 | bsStatus | tinyint(3) unsigned | NO |  | 快找状态：1审核中2审核通过3被驳回 | 
 | bsCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bsUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | bsDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��K    �  �                                                                                                                                                                                                                                     ��
  /�?from_apiwelife_biz_extras|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  | ???ID | 
 | beCompanyName | varchar(128) | NO |  | ?????? | 
 | beContactUser | varchar(128) | NO |  | ????? | 
 | beContactPhone | varchar(12) | NO |  | ????????? | 
 | beContactPosition | varchar(32) | NO |  | ???????? | 
 | beInvoiceTitle | varchar(64) | NO |  | ????? | 
 | beBank | varchar(64) | NO |  | ???????? | 
 | beAccountNumber | varchar(19) | NO | 0 | ??????? | 
 | beBusinessLicense | mediumblob | YES |  | ????? | 
 | beIDCard | mediumblob | YES |  | ???? | 
 | beTradeType | int(10) unsigned | NO |  | ??????? | 
 | beAuditLogs | text | NO |  | ?????? | 
 | beCrea  }    ted | datetime | NO | 0000-00-00 00:00:00 | ??????? | 
 | beUpdated | datetime | NO | 0000-00-00 00:00:00 | ?????? | 
 | beDeleted | datetime | NO | 0000-00-00 00:00:00 | ?????? | 
 | beStatus | tinyint(3) unsigned | NO | 0 |  | 
 | beContactEmail | varchar(64) | NO |  | 联系人邮箱。 | 
 | bePercent | int(10) unsigned | NO | 0 | 成本占比 | 
 | beBusinessLicenseNo | char(50) | NO |  | 营业执照编号 | 
 | beTradeSubType | int(11) unsigned | NO |  | 子行业类别 | 
 | beQualificationNo | varchar(300) | NO |  | 资质编号 | 
 | beQualificationStuff | mediumblob | YES |  | 资质文件照片 | 
 | beQualificationStatus | tinyint(3) unsigned | NO | 1 | 资质审核状态 | 
 | beQualificationDesc | varchar(255) | NO |  | 资质审核信息 | 
 | beIDCardNo | char(18) | NO |  | 商家身份证号 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | beTest | int(3) | NO | 0 |  | 
 | beMobile | varchar(16) | NO |  | 手机号 | 
 | beTags | text | NO |  | 各种case标签json | 
cY��K   s s                                                                                                                                                                                                                                                                                                                                                                         ��	  7�/from_apiwelife_biz_extras_old|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  |  | 
 | beCompanyName | varchar(128) | NO |  |  | 
 | beContactUser | varchar(128) | NO |  |  | 
 | beContactPhone | varchar(12) | NO |  |  | 
 | beContactPosition | varchar(32) | NO |  |  | 
 | beInvoiceTitle | varchar(64) | NO |  |  | 
 | beBank | varchar(64) | NO |  |  | 
 | beAccountNumber | varchar(19) | NO | 0 |  | 
 | beBusinessLicense | mediumblob | YES |  | Ӫҵִ | 
 | beIDCard | mediumblob | YES |  |  | 
 | beTradeType | varchar(3  �    eId | int(10) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  |  | 
 | msgTriggerTime | datetime | NO |  |  | 
 | mid | varchar(32) | NO |  |  | 
 | msgType | tinyint(3) | NO |  |  | 
 | msgCreator | varchar(32) | NO |  |  | 
 | msgModifer | varchar(32) | NO |  |  | 
 | msgStatus | tinyint(3) | NO |  | ״̬(0 | 
 | msgAuditReason | varchar(5000) | NO |  |  | 
 | msgAuditor | int(11) | NO |  |  | 
 | msgAuditLogs | text | NO |  |  | 
 | paid | int(11) unsigned | NO |  |  | 
 | msgCreated | datetime | NO |  |  | 
 | msgDeleted | datetime | NO |  | ɾ | 
 | msgUpdated | datetime | NO |  |  | 
 | aid | int(10) unsigned | NO | 0 | 相关的赠券活动ID。 | 
 | msgSelectorId | int(11) unsigned | NO | 0 | 筛选器编号 | 
 | msgReaderData | varchar(1000) | NO |  | 消息阅读人数 | 
 | msgDataIds | varchar(1500) | NO |  | 群发消息时候返回的消息ID | 
 | msgTotal | int(11) | NO | 0 | 发送总人数 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P     |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  | 商家id | 
 | acNo | varchar(64) | NO |  | 实体卡号 | 
 | acUid | bigint(20) unsigned | NO |  | 原实体卡会员用户id | 
 | uid | bigint(20) unsigned | NO |  | 微信卡会员用户id | 
 | macCharge | int(10) unsigned | NO |  | 转移金额 | 
 | macCredit | int(10) unsigned | NO |  | 转移积分 | 
 | macCouponNum | int(10) unsigned | NO |  | 转移券张数 | 
 | macSourceType | tinyint(3) unsigned | NO |  | 操作来源：1，h5 | 
 | macOperaterId | int(11) | NO |  | 操作人id | 
 | macCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | macUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | macDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | macStatus | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��P                                                                                                                                   2) | NO |  | 门店行业 | 
 | beAuditLogs | text | NO |  |  | 
 | beCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | beUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | beDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | beStatus | tinyint(3) unsigned | NO | 0 |  | 
 | beContactEmail | varchar(64) | NO |  | 联系人邮箱。 | 
 | bePercent | int(10) unsigned | NO | 0 | 成本占比 | 
 | beBusinessLicenseNo | char(50) | NO |  | 营业执照编号 | 
 | beTradeSubType | varchar(32) | NO |  | 门店子行业 | 
 | beQualificationNo | varchar(300) | NO |  | 资质编号 | 
 | beQualificationStuff | mediumblob | NO |  | 资质文件照片 | 
 | beQualificationStatus | tinyint(3) unsigned | NO | 1 | 资质审核状态 | 
 | beQualificationDesc | varchar(255) | NO |  | 资质审核信息 | 
 | beIDCardNo | char(18) | NO |  | 商家身份证号 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP |  | 
 | beTest | int(3) | NO | 0 |  | 
 | beMobile | varchar(16) | NO |  | 手机号 | 
cY��K   Q Q                                                                                                                                                                                                                                                                                                                                       �+�  +�from_apiwelife_biz_need|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | nid | int(11) unsigned | NO |  | primary key | 
 | paid | int(10) unsigned | NO |  | 代理商id | 
 | bnTitle | varchar(64) | NO |  | 标题 | 
 | bnContent | text | NO |  | 需求正文 | 
 | bnStatus | tinyint(3) | NO | 1 | 需求状态 | 
 | bnSupport | int(10) unsigned | NO | 0 | 支持数 | 
 | bnMsg | varchar(64) | NO |  | 处理结果 | 
 | bnCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | bnUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��K   + +                                                                                                                                                                                                                                                                                                 �Q�  +�[from_apiwelife_biz_auth|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  | primary key | 
 | baAppid | varchar(24) | NO |  | appid | 
 | baAppkey | varchar(32) | NO |  | appkey | 
 | bid | int(10) unsigned | NO |  | bid | 
 | baAuth | text | NO |  | 权限 | 
 | baCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | baUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | baDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | baStatus | tinyint(1) unsigned | NO | 1 | 状态 | 
 | baFuncModules | int(10) unsigned | NO | 0 | 商家接口各功能开关，按位与 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��K   � �                                                                                                                                                                                                                                                                                                                                                                                                              �d�  ;�qfrom_apiwelife_biz_api_redirect|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | arid | int(11) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  | 商家id | 
 | url | varchar(512) | NO |  | 跳转到商家设定的URL | 
 | encryptUrl | varchar(32) | NO |  | 加密的跳转URL | 
 | barCreated | datetime | NO |  |  | 
 | barUpdated | datetime | NO |  |  | 
 | barDeleted | datetime | NO |  |  | 
 | barStatus | tinyint(4) | NO |  |  | 
 | UpdateTime | timestamp | NO | 0000-00-00 00:00:00 |  | 
 | IsDeleted | tinyint(4) | NO |  |  | 
cY��K    P  P                                                                      �,�  3�	from_apiwelife_biz_accounts|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | baId | varchar(32) | NO |  | bid_sid_type | 
 | bid | int(11) unsigned | NO | 0 | bid | 
 | sid | int(11) unsigned | YES | 0 | sid | 
 | baType | tinyint(3) unsigned | NO | 0 | 财务类型 1 短信储值 | 
 | baTotalAmount | int(11) unsigned | NO | 0 | 储值总金额分为单位 | 
 | baBalanceAmount | int(11) unsigned | NO | 0 | 账户余额分为单位 | 
 | baChargeCount | int(11) unsigned | NO | 0 | 充值次数 | 
 | baCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | baUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | baDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | baStatus | tinyint(3) unsigned | YES | 0 | 状态 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J    d | NO |  | primary key | 
 | baId | varchar(32) | NO |  | 对应商家账号的key | 
 | bid | int(11) unsigned | NO | 0 | bid | 
 | sid | int(11) unsigned | NO | 0 | sid | 
 | balHandler | int(11) unsigned | NO | 0 | 充值(消费)操作者id | 
 | baType | tinyint(3) unsigned | NO | 0 | 财务类型 1 短信储值 | 
 | balTradeType | tinyint(3) unsigned | NO | 0 | 财务操作类型 1充值 2扣款消费 | 
 | balTotalAmount | int(11) unsigned | NO | 0 | 当前储值总金额分为单位 | 
 | balBalanceAmount | int(11) unsigned | NO | 0 | 当前账户余额分为单位 | 
 | balTradeMoney | int(11) unsigned | NO | 0 | 本次充值（扣款）等交易金额分为单位 | 
 | balCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | balUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | balDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | balStatus | tinyint(3) unsigned | NO | 0 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J    � x �                                                                                                                                                                                                             ��  ;�Ofrom_apiwelife_biz_account_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigne  ���  9�3from_apiwelife_batches_invoice|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | biId | int(11) unsigned | NO |  |  | 
 | biLid | bigint(64) unsigned | NO |  | 相关的充值记录ID | 
 | biMoney | int(10) unsigned | NO |  | 发票金额 | 
 | biCreator | bigint(20) unsigned | NO |  | 操作者 | 
 | biCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | biUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | biDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | biStatus | tinyint(3) unsigned | NO | 1 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J    �  �                                                                                                                                                                                            �6�  +�%from_apiwelife_articles|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | waid | int(10) unsigned | NO |  | primary key | 
 | waTitle | varchar(20) | NO |  | 标题 | 
 | waModule | tinyint(4) | NO |  | 模块 | 
 | waTag | tinyint(4) | NO |  | 标签 | 
 | waRecommend | tinyint(4) | NO |  | 热门推荐 | 
 | waAbstract | varchar(50) | NO |  | 摘要 | 
 | waContent | mediumtext | NO |  | 内容 | 
 | bmName | varchar(32) | NO |  | 最后编辑者 | 
 | waCreated | datetime | NO |  | 创建时间 | 
 | waUpdated | datetime | NO |  | 更新时间 | 
 | waDeleted | datetime | NO |  | 删除时间 | 
 | waStatus | tinyint(4) | NO |  | 数据状态 | 
 | waPic | mediumblob | NO |  | 图片 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J    来源 | 
 | aclOperator | int(10) unsigned | NO |  | 操作员 | 
 | aclSourceNo | varchar(64) | NO |  |  | 
 | aclActualNo | varchar(64) | NO |  |  | 
 | aclPhone | char(11) | NO | 0 | 手机号 | 
 | aclCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aclUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aclDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aclStatus | tinyint(3) unsigned | NO |  |  | 
 | aclTransNumber | varchar(64) | NO |  | 支付交易订单号 | 
 | aclPayStatus | tinyint(4) unsigned | NO | 1 | 支付状态 | 
 | aclBizId | varchar(64) | NO |  | 第三方提交的交易单号 | 
 | aclPrintNumber | int(5) | NO | 0 | ypos小票打印次数 | 
 | aclFromOtherCNo | varchar(256) | NO |  | 外卡导入-旧系统卡号 | 
 | aclFromOtherCMoney | int(11) | NO | 0 | 外卡导入-旧系统储值余额（单位：分） | 
 | aclFromOtherCCredit | int(11) | NO | 0 | 外卡导入-旧系统积分余额 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J                                                                                                                                                                                                                                                                                 �]�  ;�cfrom_apiwelife_actual_card_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | aclid | bigint(20) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO | 0 |  | 
 | sid | int(10) unsigned | NO | 0 |  | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | aclRelateId | int(10) unsigned | NO |  | 关联批次id | 
 | aclRelateName | varchar(60) | NO |  | 关联批次名称 | 
 | aclCardCategory | varchar(64) | NO |  | 卡类别名称 | 
 | aclMode | tinyint(3) unsigned | NO |  |  | 
 | aclSalePrice | int(10) unsigned | NO |  | 售价 | 
 | aclPayType | tinyint(3) unsigned | NO |  | 支付方式 | 
 | aclSourceType | tinyint(3) unsigned | NO |  |   �    1) unsigned | NO | 0 | 卡号前缀7为随机商户id | 
 | acbBoundNum | int(11) unsigned | NO | 0 | 绑定数量 | 
 | acbOperatorId | int(11) unsigned | NO | 0 | 操作者id | 
 | acbCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | acbUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
 | acbDeleted | datetime | NO | 0000-00-00 00:00:00 | 删除时间 | 
 | acbStatus | tinyint(3) unsigned | NO | 0 | 状态 | 
 | acbCategory | varchar(160) | NO |  | 实体卡分类 | 
 | acbCharge | int(11) unsigned | NO | 0 | 实体卡储值 | 
 | acbCredit | int(11) unsigned | NO | 0 | 实体卡积分 | 
 | acbCoupon | text | NO |  | 实体卡券json | 
 | acbFuncModules | tinyint(3) unsigned | NO | 0 | 实体卡批次功能开关 | 
 | acbShops | text | NO |  | 批次的卡限制使用门店 | 
 | acbSalePrice | int(10) unsigned | NO | 0 | 实体卡售价 | 
 | ccid | int(11) unsigned | NO | 0 | 关联卡类别 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J     _                �8�   ?�from_apiwelife_actual_card_batchs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | acbId | int(11) unsigned | NO |  | primary key | 
 | bid | int(11) unsigned | NO | 0 | 商户id | 
 | acbTotalNum | int(11) unsigned | NO | 0 | 卡号数量 | 
 | acbPrefixNum | int(1  ���  A�]from_apiwelife_activity_totalizers|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  | primary key | 
 | atKey | varchar(32) | NO |  | aid    uid | 
 | aid | int(10) unsigned | NO |  |  | 
 | uid | bigint(20) | NO |  |  | 
 | atCount | int(10) unsigned | NO |  |  | 
 | atAlready | smallint(10) unsigned | NO |  |  | 
 | atHistories | text | NO |  |  | 
 | atCreated | datetime | NO |  |  | 
 | atUpdated | datetime | NO |  |  | 
 | atDeleted | datetime | NO |  |  | 
 | atStatus | tinyint(3) unsigned | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J   & &                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �V�}  Q�?from_apiwelife_activity_birthday_histories|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  | primary key | 
 | abhKey | varchar(21) | NO |  | bid   _   birthday | 
 | uids | mediumtext | NO |  |  | 
 | abhCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | abhUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J   � �                                                                                                                                                                                                                                                                                                                                                                                                     �m�~  G�wfrom_apiwelife_activity_credit_orders|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | acoid | int(10) unsigned | NO |  |  | 
 | aid | int(10) unsigned | NO |  |  | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | acoCredit | mediumint(9) | NO |  | 用户参加某个活动的累计积分值，允许为负数。 | 
 | acoHistories | text | NO |  | 积分累计的交易列表。 | 
 | acoCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | acoUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��J    �发送人数。 | 
 | aTotalSendNum | int(10) unsigned | NO | 0 | 活动实际发送人数。 | 
 | bsid | int(10) unsigned | NO | 0 | 筛选器规则ID | 
 | aFuncModules | smallint(5) unsigned | NO | 0 | 当前营销活动的一些扩展功能标识，按位与。 | 
 | ccids | varchar(255) | NO |  | 开卡关怀规则适用的会员卡类型列表，半角逗号分隔多个，all 为适用所有卡类型，包括后期再添加的新卡类型。 | 
 | aChargeNum | int(10) unsigned | NO | 0 | 赠送储值。 | 
 | aCreditNum | int(10) unsigned | NO | 0 | 赠送积分。 | 
 | uQuestionId | int(10) unsigned | NO | 0 | 答卷ID。 | 
 | aRuleSummary | text | NO |  | 积分累计活动的活动规则说明内容 | 
 | aExtendModule | int(10) unsigned | NO | 0 | 按位与扩展功能字段 | 
 | originalBid | int(10) unsigned | NO | 0 | 合作商ID | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
 | aAdvanceDays | tinyint(3) unsigned | NO | 0 | 生日活动提前赠券天数 | 
cY��J  �) unsigned | NO |  | primary key | 
 | bid | int(10) unsigned | NO |  |  | 
 | aType | smallint(5) unsigned | NO |  |  | 
 | aName | varchar(32) | NO |  |  | 
 | aSids | text | NO |  |  | 
 | aStartTime | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aEndTime | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aLiveTime | varchar(256) | NO |  |  | 
 | aCoupons | text | NO |  |  | 
 | aReachMoney | int(10) unsigned | NO |  |  | 
 | aReachCount | smallint(6) | NO |  |  | 
 | aSummary | text | NO |  |  | 
 | aCreator | int(10) unsigned | NO |  |  | 
 | aModifier | int(10) unsigned | NO |  |  | 
 | aCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | aDeleted | datetime | NO | 0000-00-00 00:00:00 | ɾ | 
 | aStatus | tinyint(3) unsigned | NO |  |  | 
 | msgMessageId | int(10) unsigned | NO | 0 | welife_messages.msgMessageId | 
 | smsId | int(10) unsigned | NO | 0 | WeSms.sms_messages.id | 
 | aExceptSendNum | int(10) unsigned | NO | 0 | 活动预览到的�    � 2K �                                                                                                                                                                            ��|  /�7from_apiwelife_activities|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | aid | int(10  ��[�{  E�Ufrom_apixb_dprpt_welife_trade_manual|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO | 0 |  | 
 | ftime | int(11) unsigned | NO |  | 日期 | 
 |  ��>�z  U�from_apixb_dprpt_welife_trade_consume_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO | 0 |  | 
 | ftime | int(11) | NO |  | 时间 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
   �     tlId | bigint(64) unsigned | NO | 0 | 调整流水id | 
 | bid | int(11) unsigned | NO | 0 | 商家id | 
 | sid | int(11) unsigned | NO | 0 | 门店id | 
 | uid | bigint(64) unsigned | NO | 0 | 用户id | 
 | uphone | bigint(20) unsigned | YES |  | 手机号 | 
 | uno | bigint(64) unsigned | YES |  | 卡号 | 
 | tlBusinessType | tinyint(3) unsigned | NO | 0 | 业务类型 1 储值  2 积分 3 优惠券 | 
 | tlAdjustType | tinyint(3) unsigned | NO | 0 | 调整类型 1 增加 2 扣减 | 
 | tlMoney | int(11) unsigned | NO | 0 | 调整金额 | 
 | tlCredit | int(11) unsigned | NO | 0 | 调整积分 | 
 | tlCouponId | int(11) unsigned | NO | 0 | 调整券id | 
 | tlcouponname | varchar(100) | YES |  | 券名称 | 
 | tlCouponNum | int(11) unsigned | NO | 0 | 调整券数量 | 
 | tlRemark | varchar(256) | NO |  | 备注 | 
 | tlOperaterId | int(11) unsigned | YES | 0 | 操作员id | 
 | tloperatername | varchar(50) | YES |  | 操作员名称 | 
 | tlCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
cY��'    igint(12) | NO | 0 | 过期 | 
 | tclprofit | bigint(20) | NO | 0 | 消费使用储值赠送 | 
 | tclprinciple | bigint(20) | NO | 0 | 消费使用储值本金 | 
 | canceltclprofit | bigint(20) | NO | 0 | 撤销使用储值赠送 | 
 | canceltclprinciple | bigint(20) | NO | 0 | 撤销使用储值本金 | 
 | overduetclprofit | bigint(20) | NO | 0 | 过期使用储值赠送 | 
 | overduetclprinciple | bigint(20) | NO | 0 | 过期使用储值本金 | 
 | sendpoint | bigint(20) | NO | 0 | 赠送积分 | 
 | pointpay | bigint(20) | NO | 0 | 积分抵扣金额 | 
 | tclactivityaddup | bigint(20) | NO | 0 | 参与活动的累计次数 | 
 | aid | bigint(20) | NO | 0 | 活动ID | 
 | remark | varchar(1024) | NO |  | 备注 | 
 | tcsourcetype | int(10) unsigned | NO | 1 | 交易来源类型：1：软POS 2：2：硬POS 3：开放接口 | 
 | tctransnumber | varchar(64) | NO |  | 支付交易订单号 | 
 | uid | bigint(20) unsigned | NO | 1 | uid | 
 | grid | int(11) | NO | 0 | 会员等级，默认为0 | 
cY��'    M  M                                                                   ��t  C�Ofrom_apixb_dprpt_welife_core_data_h|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | bigint(20) | YES | 0 |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | htime | bigint(10) | NO |  | 小时 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | grid | bigint(20) | NO |  | 会员等级ID | 
 | consume_pv | bigint(20) | NO |  | 消费笔数 | 
 | cancel_consume_pv | bigint(20) | NO |  | 撤销消费笔数 | 
 | consume_totalfee | bigint(20) | NO |  | 消费总金额 | 
 | cancel_consume_totalfee | bigint(20) | NO |  | 撤销消费总金额 | 
 | tcfee | bigint(20) | NO |  | 消费实收金额总计 | 
 | cancel_tcfee | bigint(20) | NO |  | 撤销消费实收金额总计 | 
 | tcfee_pay_cash | bigint(20) | NO |  | 消费实收金额（现金支付方式1） | 
 | cancel_tcfee_pay_cash | bigint(20) | NO |  | 撤销消费实收金额（现  �  �| uno | bigint(30) | YES |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tcpaytype | bigint(11) | YES |  | 支付方式 | 
 | tctype | bigint(11) | YES |  | 交易类型 | 
 | tchandle | bigint(11) | YES |  | 操作员ID | 
 | mname | varchar(100) | YES |  | 操作员 | 
 | tclcreated | varchar(100) | YES |  | 交易时间 | 
 | tctotalfee | bigint(20) | NO | 0 | 消费总金额 | 
 | tcfee | bigint(20) | NO | 0 | 实收金额 | 
 | tcstoredpay | bigint(20) | NO | 0 | 储值支付 | 
 | tcgiftcouponpay | bigint(20) | NO | 0 | 礼品券金额 | 
 | tccouponpay | bigint(20) | NO | 0 | 代金券金额 | 
 | usecoupon | varchar(500) | YES |  | 使用代金券 | 
 | usegiftcoupon | varchar(500) | YES |  | 使用礼品券 | 
 | sendcoupon | varchar(500) | YES |  | 发放代金券 | 
 | sendgiftcoupon | varchar(500) | YES |  | 发放礼品券 | 
 | cancelcoupon | varchar(500) | YES |  | 撤销使用代金券 | 
 | cancelgiftcoupon | varchar(500) | YES |  | 撤销使用礼品券 | 
 | overdue | b    �  �                                                                                                                                                                          �H�y  E�/from_apixb_dprpt_welife_cross_credit|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO | 0 |  | 
 | ftime | int(11) | NO |  |  日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | usedsid | bigint(20) | NO |  | 使用积分门店ID | 
 | creditsid | bigint(20) | NO |  | 积分门店ID | 
 | uno | bigint(30) | NO |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tctype | bigint(11) | NO |  | 交易类型2手工扣减5积分抵扣6积分抵扣撤销8积分换礼9积分换礼撤销 | 
 | tclcreated | datetime | NO |  | 交易时间 | 
 | creditnum | bigint(20) | YES | 0 | 储值支付 | 
 | tcsourcetype | int(3) | NO | 1 | 消费来源 | 
cY��'   ^ ^                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ��x  O�Qfrom_apixb_dprpt_welife_cross_credit_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO | 0 |  | 
 | ftime | bigint(20) | YES |  | 日期 | 
 | bid | bigint(20) | YES | 0 | 商户ID | 
 | sid | bigint(20) | YES | 0 | 门店ID | 
 | rececredit | bigint(20) | YES | 0 | 应收积分 | 
 | paycredit | bigint(20) | YES | 0 | 应付积分 | 
cY��'    x  x                                                                                                              ��w  E�'from_apixb_dprpt_welife_cross_charge|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO | 0 |  | 
 | ftime | int(11) | NO |  |  日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | usedsid | bigint(20) | NO |  | 使用储值门店ID | 
 | chargesid | bigint(20) | NO |  | 储值门店ID | 
 | uno | bigint(30) | NO |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tctype | bigint(11) | NO |  | 交易类型 | 
 | tcstoredpay | bigint(20) | YES | 0 | 储值支付 | 
 | tclprofit | bigint(20) | YES | 0 | 消费使用储值赠送 | 
 | tclprinciple | bigint(20) | YES | 0 | 消费使用储值本金 | 
 | tclcreated | datetime | NO |  | 交易时间 | 
 | tcsourcetype | int(3) | NO | 1 | 消费来源 | 
cY��'    nused_charge_amount | bigint(20) | NO |  | 上一小时预存剩余总额 | 
 | last_unused_charge_cash | bigint(20) | NO |  | 上一小时预存剩余本金 | 
 | dtime | bigint(20) | NO | 0 | 详细时间(日期 小时) | 
 | last_unused_credit | bigint(20) | YES |  | 积分余额 | 
 | charge_amount_overdue | bigint(20) unsigned | NO | 0 | 储值过期金额 | 
 | charge_cash_overdue | bigint(20) unsigned | NO | 0 | 储值过期金额本金 | 
 | credit_overdue | bigint(20) unsigned | NO | 0 | 积分过期 | 
 | credit_opencard | bigint(20) unsigned | NO | 0 | 开卡事件赠送积分 | 
 | credit_upgrade | bigint(20) unsigned | NO | 0 | 升级事件赠送积分 | 
 | charge_pay_opencard | bigint(20) unsigned | NO | 0 | 开卡事件赠送储值 | 
 | charge_pay_upgrade | bigint(20) unsigned | NO | 0 | 升级事件赠送储值 | 
 | manual_deduction_charge_cash | bigint(20) | NO | 0 | 手工扣减储值本金 | 
 | manual_deduction_charge_present | bigint(20) | NO | 0 | 手工扣减储值赠送 | 
cY��&  � | 
 | cancel_charge_pay_wechat_offline | bigint(20) | NO |  | 撤销储值实收（店内微信支付5） | 
 | charge_pay_alipay | bigint(20) | NO |  | 储值实收（支付方式支付宝4） | 
 | cancel_charge_pay_alipay | bigint(20) | NO |  | 撤销储值实收（支付方式支付宝4） | 
 | charge_present | bigint(20) | NO |  | 奖励储值金额 | 
 | cancel_charge_present | bigint(20) | NO |  | 撤销奖励储值金额 | 
 | manual_add_charge | bigint(20) | NO |  | 手工增加储值 | 
 | manual_deduction_charge | bigint(20) | NO |  | 手工扣减储值 | 
 | manual_add_credit | bigint(20) | NO |  | 手工增加积分 | 
 | manual_deduction_credit | bigint(20) | NO |  | 手工扣减积分 | 
 | manual_add_coupon | bigint(20) | NO |  | 手工增加券 | 
 | manual_deduction_coupon | bigint(20) | NO |  | 手工扣减券 | 
 | charge_pay_card | bigint(20) | NO |  | 储值实收（储值卡支付） | 
 | cancel_charge_pay_card | bigint(20) | NO |  | 储值实收（储值卡支付） | 
 | last_u  �arge_pv | bigint(20) | NO |  | 充值笔数 | 
 | cancel_charge_pv | bigint(20) | NO |  | 撤销充值笔数 | 
 | charge_amount | bigint(20) | NO |  | 充值金额 | 
 | cancel_charge_amount | bigint(20) | NO |  | 撤销充值金额 | 
 | charge_cash | bigint(20) | NO |  | 充值实收金额 | 
 | cancel_charge_cash | bigint(20) | NO |  | 撤销充值实收金额 | 
 | charge_pay_cash | bigint(20) | NO |  | 储值实收（支付方式现金1） | 
 | cancel_charge_pay_cash | bigint(20) | NO |  | 撤销储值实收（支付方式现金1） | 
 | charge_pay_bank | bigint(20) | NO |  | 储值实收（支付方式银行卡2） | 
 | cancel_charge_pay_bank | bigint(20) | NO |  | 撤销储值实收（支付方式银行卡2） | 
 | charge_pay_wechat_online | bigint(20) | NO |  | 储值实收（支付方式微信3） | 
 | cancel_charge_pay_wechat_online | bigint(20) | NO |  | 撤销储值实收（支付方式微信3） | 
 | charge_pay_wechat_offline | bigint(20) | NO |  | 储值实收（店内微信支付5）  �int(20) | NO |  | 使用储值奖励金额 | 
 | cancel_tclprinciple | bigint(20) | NO |  | 撤销使用储值奖励金额 | 
 | tccreditpay | bigint(20) | NO |  | 积分抵扣 | 
 | cancel_tccreditpay | bigint(20) | NO |  | 撤销积分抵扣 | 
 | tccouponpay | bigint(20) | NO |  | 代金券抵扣 | 
 | cancel_tccouponpay | bigint(20) | NO |  | 撤销代金券抵扣 | 
 | usecoupon | bigint(20) | NO |  | 使用代金券 | 
 | cancel_usecoupon | bigint(20) | NO |  | 撤销使用代金券 | 
 | tcgiftcouponpay | bigint(20) | NO |  | 礼品券抵扣 | 
 | cancel_tcgiftcouponpay | bigint(20) | NO |  | 撤销礼品券抵扣 | 
 | usegiftcoupon | bigint(20) | NO |  | 使用礼品券张数 | 
 | cancel_usegiftcoupon | bigint(20) | NO |  | 撤销使用礼品券 | 
 | tcawardcredit | bigint(20) | NO |  | 奖励积分 | 
 | cancel_tcawardcredit | bigint(20) | NO |  | 撤销奖励积分 | 
 | credit_gift | bigint(20) | NO |  | 换礼积分 | 
 | cancel_credit_gift | bigint(20) | NO |  | 撤销换礼积分 | 
 | ch  �金支付方式1） | 
 | tcfee_pay_bank | bigint(20) | NO |  | 实收金额（银行卡支付方式2） | 
 | cancel_tcfee_pay_bank | bigint(20) | NO |  | 撤销实收金额（银行卡支付方式2） | 
 | tcfee_pay_wechat_online | bigint(20) | NO |  | 实收金额（微信支付6） | 
 | cancel_tcfee_pay_wechat_online | bigint(20) | NO |  | 撤销实收金额（微信支付6） | 
 | tcfee_pay_wechat_offline | bigint(20) | NO |  | 店内微信支付3 | 
 | cancel_tcfee_pay_wechat_offline | bigint(20) | NO |  | 撤销店内微信支付3 | 
 | tcfee_pay_alipay | bigint(20) | NO |  | 实收金额（支付宝支付4） | 
 | cancel_tcfee_pay_alipay | bigint(20) | NO |  | 撤销实收金额（支付宝支付4） | 
 | tcstoredpay | bigint(20) | NO |  | 使用储值金额 | 
 | cancel_tcstoredpay | bigint(20) | NO |  | 撤销使用储值金额 | 
 | tclprofit | bigint(20) | NO |  | 使用储值实收金额 | 
 | cancel_tclprofit | bigint(20) | NO |  | 撤销使用储值实收金额 | 
 | tclprinciple | big   N N                                                                                                                                                                                                                                                                                                                                    �&�s  C�mfrom_apixb_dprpt_welife_consume_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO | 0 |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | YES |  | 门店ID | 
 | consume_amount | bigint(20) | YES | 0 | 消费总金额 | 
 | consume_cash | bigint(20) | YES | 0 | 消费使用现金 | 
 | consume_prepay | bigint(20) | YES | 0 | 消费使用预存 | 
 | cancel_amount | bigint(20) | NO | 0 | 撤销总金额 | 
 | cancel_cash | bigint(20) | NO | 0 | 撤销现金 | 
 | cancel_prepay | bigint(20) | NO | 0 | 撤销预存 | 
 | overdue_amount | bigint(20) |   �    NO | 0 | 过期总金额 | 
 | consume_amount_pv | bigint(20) | YES | 0 | 总消费笔数 | 
 | consume_cash_pv | bigint(20) | YES | 0 | 现金消费笔数 | 
 | consume_prepay_pv | bigint(20) | YES | 0 | 储值消费笔数 | 
 | cancel_amount_pv | bigint(20) | NO | 0 | 撤销总笔数 | 
 | cancel_cash_pv | bigint(20) | NO | 0 | 撤销使用现金笔数 | 
 | cancel_prepay_pv | bigint(20) | NO | 0 | 撤销使用预存笔数 | 
 | overdue_pv | bigint(20) | NO | 0 | 过期总笔数 | 
 | consume_amount_uv | bigint(20) | YES | 0 | 总消费人数 | 
 | consume_cash_uv | bigint(20) | YES | 0 | 现金消费人数 | 
 | consume_prepay_uv | bigint(20) | YES | 0 | 储值消费人数 | 
 | cancel_amount_uv | bigint(20) | NO | 0 | 撤销总人数 | 
 | cancel_cash_uv | bigint(20) | NO | 0 | 撤销使用现金人数 | 
 | cancel_prepay_uv | bigint(20) | NO | 0 | 撤销使用预存人数 | 
 | overdue_uv | bigint(20) | NO | 0 | 过期交易总人数 | 
 | consume_amount_avg | double | YES | 0 | 消费均价 | 
cY��&   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  �x�n  K�	from_apixb_dprpt_welife_charge_d_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | YES |  |  | 
 | ftime | bigint(20) | YES |  |  | 
 | bid | bigint(20) | YES |  | 商户ID | 
 | si  �   y y                                                                                                                                                                                                                                                                                                                                                                               �{�r  C�from_apixb_dprpt_welife_consume_bid|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO | 0 |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | consume_amount | bigint(20) | YES | 0 | 消费总金额 | 
 | consume_cash | bigint(20) | YES | 0 | 消费使用现金 | 
 | consume_prepay | bigint(20) | YES | 0 | 消费使用预存 | 
 | cancel_amount | bigint(20) | NO | 0 | 撤销总金额 | 
 | cancel_cash | bigint(20) | NO | 0 | 撤销现金 | 
 | cancel_prepay | bigint(20) | NO | 0 | 撤销预存 | 
 | overdue_amount | bigint(20) |   �    NO | 0 | 过期总金额 | 
 | consume_amount_pv | bigint(20) | YES | 0 | 总消费笔数 | 
 | consume_cash_pv | bigint(20) | YES | 0 | 现金消费笔数 | 
 | consume_prepay_pv | bigint(20) | YES | 0 | 储值消费笔数 | 
 | cancel_amount_pv | bigint(20) | NO | 0 | 撤销总笔数 | 
 | cancel_cash_pv | bigint(20) | NO | 0 | 撤销使用现金笔数 | 
 | cancel_prepay_pv | bigint(20) | NO | 0 | 撤销使用预存笔数 | 
 | overdue_pv | bigint(20) | NO | 0 | 过期总笔数 | 
 | consume_amount_uv | bigint(20) | YES | 0 | 总消费人数 | 
 | consume_cash_uv | bigint(20) | YES | 0 | 现金消费人数 | 
 | consume_prepay_uv | bigint(20) | YES | 0 | 储值消费人数 | 
 | cancel_amount_uv | bigint(20) | NO | 0 | 撤销总人数 | 
 | cancel_cash_uv | bigint(20) | NO | 0 | 撤销使用现金人数 | 
 | cancel_prepay_uv | bigint(20) | NO | 0 | 撤销使用预存人数 | 
 | overdue_uv | bigint(20) | NO | 0 | 过期交易总人数 | 
 | consume_amount_avg | double | YES | 0 | 消费均价 | 
cY��&   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                               �+�q  A�yfrom_apixb_dprpt_welife_charge_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | YES | 0 |  | 
 | ftime | int(20) | YES |  | 日期 | 
 | bid | bigint(20) | YES |  | 商户ID | 
 | bname | varchar(100) | YES |  | 商户名称 | 
 | sid | bigint(20) | YES |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
 | charge_amount | bigint(20) | YES | 0 | 储值总金额 | 
 | charge_cash | bigint(20) | YES | 0 | 实收金额 | 
 | charge_present | bigint(20) | YES | 0 | 奖励�  �    �额 | 
 | charge_amount_pv | bigint(20) | YES | 0 | 储值笔数 | 
 | charge_amount_unused | bigint(20) | YES | 0 | 沉淀金额 | 
 | ruleid | varchar(100) | YES |  | 储值规则ID | 
 | crlrule | varchar(500) | YES |  | 储值规则名称 | 
 | cancel_charge_amount | bigint(20) | YES | 0 | 撤销储值总金额 | 
 | cancel_charge_cash | bigint(20) | YES | 0 | 撤销储值实收金额 | 
 | cancel_charge_present | bigint(20) | YES | 0 | 撤销储值赠送金额 | 
 | cancel_charge_amount_pv | bigint(20) | YES | 0 | 撤销储值笔数 | 
 | chargetype | int(11) | YES | 0 | 储值类型 | 
 | charge_cash_unused | bigint(20) | YES | 0 | 累计未使用储值中的本金 | 
 | award_coupon_num | bigint(20) | YES |  | 奖励代金券数量 | 
 | award_coupon_amount | bigint(20) | YES |  | 奖励代金券金额 | 
 | award_gift_num | bigint(20) | YES |  | 奖励礼品券数量 | 
 | award_gift_amount | bigint(20) | YES |  | 奖励礼品券金额 | 
 | tcsourcetype | int(10) | YES |  | 来源类型 | 
cY��&    -    |:--- |-- -|------      |
 | id | int(20) | NO | 0 |  | 
 | ftime | int(10) | NO |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | charge_mount | bigint(20) | NO | 0 | 充值金额 | 
 | charge_cash | bigint(20) | NO | 0 | 实收金额 | 
 | charge_present | bigint(20) | NO | 0 | 奖励金额 | 
 | charge_mount_value_card | bigint(20) | NO | 0 | 储值卡充值金额 | 
 | charge_mount_manual_add | bigint(20) | NO | 0 | 手工增加金额 | 
 | charge_mount_manual_reduce | bigint(20) | NO | 0 | 手工扣减金额 | 
 | charge_mount_pos | bigint(20) | NO | 0 | pos使用储值金额 | 
 | charge_mount_mall | bigint(20) | NO | 0 | 商城使用储值金额 | 
 | charge_mount_overdue | bigint(20) | NO | 0 | 过期金额 | 
 | charge_mount_opencard | bigint(20) unsigned | NO | 0 | 开卡赠送储值 | 
 | charge_mount_upgrade | bigint(20) unsigned | NO | 0 | 升级赠送储值 | 
 | charge_mount_waimai | bigint(20) unsigned | NO | 0 | 外卖使用储值金额 | 
cY��&             c  � c                                                                                       �Z�p  G�Qfrom_apixb_dprpt_welife_charge_d_stat|字段|类型|空|默认|注释|
|:----    |:------  ��"�o  G�afrom_apixb_dprpt_welife_charge_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) unsigned | NO | 0 |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | bname | varchar(100) | YES |  | 商户名称 | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
 | tcid | bigint(20) | YES |  | 流水号 | 
 | ucid | bigint(20) | YES |  | 卡号 | 
 | mobile | bigint(20) | YES |  | 手机号 | 
 | tradetime | datetime | YES |  | 交易时间 | 
 | charge_amount | bigint(20) | YES | 0 | 充值金额 | 
 | charge_cash | bigint(20) | YES | 0 | 实收金额 | 
 | charge_present | bigint(20) | YES | 0 | 奖励金额 | 
 | charge_type | int(11) | YES |  | 支付方式   �    | 
 | hasreceipt | int(11) | YES |  | 是否已开发票 | 
 | operater | varchar(100) | YES |  | 操作员 | 
 | tctype | int(11) | NO | 1 | 储值类型 | 
 | tcrelateid | bigint(20) | NO | 0 | 关联被撤销储值流水 | 
 | operaterid | bigint(20) | YES | 0 | 操作员ID | 
 | awardcouponid | int(11) unsigned | NO | 0 | 奖励优惠券Id | 
 | awardcouponname | varchar(2048) | YES |  | 奖励优惠券名称 | 
 | awardcouponnum | int(11) unsigned | NO | 0 | 奖励优惠券数量 | 
 | awardcoupontype | int(3) unsigned | NO | 0 | 奖励券类型 | 
 | tcremark | varchar(100) | YES |  | 备注 | 
 | uoorderid | bigint(20) unsigned | YES |  | 用户订单号 | 
 | camount | bigint(20) | NO |  | 奖励券金额 | 
 | tcsourcetype | tinyint(3) | NO | 1 |  | 
 | tctransnumber | varchar(64) | NO | 0 | 交易号 | 
 | tcstatus | tinyint(3) | NO |  | 1表示储值成功，2表示预储值 | 
 | tcpaystatus | tinyint(3) | NO | 0 | 订单支付状态 | 
 | uid | bigint(20) unsigned | NO | 1 | 用户id | 
cY��&    d | bigint(20) | YES |  | 门店ID | 
 | tradetime | datetime | YES |  | 交易时间 | 
 | tcid | bigint(20) | YES |  | 流水号 | 
 | tcrelateid | bigint(20) | YES |  | 撤销流水号 | 
 | uno | bigint(20) | YES |  | 卡号 | 
 | uphone | bigint(20) | YES |  | 手机号 | 
 | amount | bigint(20) | YES |  | 储值总额 | 
 | cash | bigint(20) | YES |  | 储值现金 | 
 | present | bigint(20) | YES |  | 储值赠送 | 
 | pay_type | int(3) | YES |  | 消费支付方式（1.现金 2.银行卡 3.店内微信支付 4.支付宝支付 6.微信支付）  储值支付方式（1.现金支付 2.银行卡支付 3.微信支付 4.支付宝支付 5.店内微信支付 6.手工调账 7.储值卡支付） | 
 | tctype | int(3) | YES |  | 消费类型（2.消费 3.撤销消费 5.过期 8.手工调账减少充值 ） 储值类型（1.充值 6.撤销充值） | 
 | tcsourcetype | int(3) | YES |  | 消费(1.软POS 2.硬POS 3.OPENAPI接口 4.商城Mall支付) | 
 | datatype | int(3) | YES |  | 1.消费  2.储值 | 
cY��&    v � v                                                                                                          ��l  ;�gfrom_apiwelife_charge_rule_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | primary key | 
 | bid | int(11) unsigned | NO | 0 | 商户ID | 
 | crlRuleId | int(11) unsigned | NO |  | 充值规则ID | 
 | crlRuleIds | char(15) | NO |  | 充值规则ID明细 | 
 | crlRule | varchar(500) | NO |  | 充值规则 | 
 | crlCreated | datetime | NO | 0000-00-00 00:00:00 | 创建时间 | 
 | crlUpdated | datetime | NO | 0000-00-00 00:00:00 | 更新时间 | 
cY��&�c�k  5�ufrom_apiwedatas_stat_test_t1|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | type_uin | int(10) | NO |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | qChannelType | bigint(10) | YES | 0 |  | 
 | qDesc | varchar(1024) | YES |  |  | 
 | qrid | varchar(1024) | YES |  |  | 
 | num | int(10) | NO |  |  | 
cY��&    �  �                                                                                                                                                                    �N�m  ?�Afrom_apiwelife_user_birthday_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  | 自增id | 
 | bid | int(10) unsigned | NO | 0 | 商家id | 
 | uid | bigint(20) unsigned | NO | 0 | 用户id | 
 | uBirthDay | varchar(10) | NO |  | 生日 | 
 | uIsLunarBirth | tinyint(3) unsigned | NO | 0 | 是否是阴历生日 | 
 | uConstellation | tinyint(3) unsigned | NO | 0 | 用户星座 | 
 | ublLastActivityYear | year(4) | NO | 0000 | 最后参与生日活动的年份 | 
 | ublLastActivityTime | datetime | NO |  | 最后参与生日活动的时间 | 
 | ublCreated | datetime | NO |  | 创建时间 | 
 | ublUpdated | datetime | NO |  | 更新时间 | 
 | ublDeleted | datetime | NO |  | 删除时间 | 
 | ublStatus | tinyint(4) unsigned | NO | 0 | 状态 | 
cY��&    | bigint(20) | NO | 0 | 消费使用储值本金 | 
 | canceltclprofit | bigint(20) | NO | 0 | 撤销使用储值赠送 | 
 | canceltclprinciple | bigint(20) | NO | 0 | 撤销使用储值本金 | 
 | overduetclprofit | bigint(20) | NO | 0 | 过期使用储值赠送 | 
 | overduetclprinciple | bigint(20) | NO | 0 | 过期使用储值本金 | 
 | sendpoint | bigint(20) | NO | 0 | 赠送积分 | 
 | pointpay | bigint(20) | NO | 0 | 积分抵扣金额 | 
 | tclactivityaddup | bigint(20) | NO | 0 | 参与活动的累计次数 | 
 | aid | bigint(20) | NO | 0 | 活动ID | 
 | remark | text | NO |  | 备注项 | 
 | tcsourcetype | int(10) unsigned | NO | 1 | 交易来源类型：1：软POS 2：2：硬POS 3：开放接口 | 
 | tctransnumber | varchar(64) | NO |  | 支付交易订单号 | 
 | uid | bigint(20) unsigned | NO | 1 | uid | 
 | grid | int(11) | NO | 0 | 会员等级，默认为0 | 
 | tcbizid | varchar(64) | YES |  | 第三方交易流水号id | 
 | tcthirdid | varchar(64) | NO |  | 第三方ID | 
cY��$  � | YES |  | 支付方式 | 
 | tctype | bigint(11) | YES |  | 交易类型 | 
 | tchandle | bigint(11) | YES |  | 操作员ID | 
 | mname | varchar(100) | YES |  | 操作员 | 
 | tclcreated | varchar(100) | YES |  | 交易时间 | 
 | tctotalfee | bigint(20) | NO | 0 | 消费总金额 | 
 | tcfee | bigint(20) | NO | 0 | 实收金额 | 
 | tcstoredpay | bigint(20) | NO | 0 | 储值支付 | 
 | tcgiftcouponpay | bigint(20) | NO | 0 | 礼品券金额 | 
 | tccouponpay | bigint(20) | NO | 0 | 代金券金额 | 
 | usecoupon | varchar(500) | YES |  | 使用代金券 | 
 | usegiftcoupon | varchar(500) | YES |  | 使用礼品券 | 
 | sendcoupon | varchar(500) | YES |  | 发放代金券 | 
 | sendgiftcoupon | varchar(500) | YES |  | 发放礼品券 | 
 | cancelcoupon | varchar(500) | YES |  | 撤销使用代金券 | 
 | cancelgiftcoupon | varchar(500) | YES |  | 撤销使用礼品券 | 
 | overdue | bigint(12) | NO | 0 | 过期 | 
 | tclprofit | bigint(20) | NO | 0 | 消费使用储值赠送 | 
 | tclprinciple     Y ] Y                                                                             � �g  7�-from_apifix_first_charge_temp|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | tcId | bigint(64) unsigned | NO |  |  | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | tcCreated | datetime | NO |  |  | 
cY��%��f  C�_from_apifix_dprpt_welife_x1_consume|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | ftime | int(11) | YES |  |  | 
 | bid | bigint(20) | YES |  |  | 
 | tcid | bigint(60) | YES |  |  | 
 | sid | bigint(20) | YES |  |  | 
 | uno | bigint(30) | YES |  | 卡号 | 
 | uphone | varchar(20) | YES |  |  | 
 | tcpaytype | bigint(11) | YES |  | 支付方式 | 
 | tctype | bigint(11) | YES |  | 交易类型 | 
 | tclcreated | varchar(100) | YES |  | 交易时间 | 
 | tctotalfee | bigint(20) | YES |  |  | 
 | tcfee | bigint(20) | YES |  |  | 
 | remark | varchar(1024) | YES |  |  | 
 | uid | bigint(20) | YES |  |  | 
cY��%    .                                                                                                                                                                                                                                                            #�e  from_apidwoutput
cY��%�N�d  3�Mfrom_apidprpt_welife_ypos_d|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) | NO |  |  | 
 | ftime | int(10) | NO |  | 日期 | 
 | paid | int(10) | NO |  | 代理商ID | 
 | paName | varchar(200) | YES |  | 代理商名称 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | bBrandName | varchar(200) | NO |  | 商户名称 | 
 | sourceType | int(3) | NO |  | 来源（硬POS、旺POS | 
 | payType | int(3) | NO |  | 支付方式（银联、微信、支付宝） | 
 | dataType | int(10) | NO |  | 类型（消费1001、储值1002、开卡1003） | 
 | sale | bigint(20) | NO |  | 实际支付总额 | 
 | pv | int(10) | NO |  | 实际支付笔数 | 
cY��%                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �p�c  9�from_apidprpt_welife_user_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  | ID | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | source | bigint(20) | NO | 0 | 来源 | 
 | astatus | bigint(20) | NO | 0 | 活跃度 | 
 | num | bigint(20) | NO | 0 | 汇总数量 | 
 | mobile_num | bigint(20) | NO |  | 手机号去重用户数 | 
cY��%    B F B                                                      � �b  I�from_apidprpt_welife_user_stat_baitest|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  | ID | 
 | ftime | bigint(20) | NO | 0 | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | YES |  | 门店ID | 
 | source | bigint(20) | NO |  | 来源 | 
 | astatus | bigint(20) | YES | 0 | 活跃度 | 
 | num | bigint(20) | NO |  | 汇总数量 | 
 | mobile_num | bigint(20) | NO |  | 手机号去重用户数 | 
cY��%�.�a  7�	from_apidprpt_welife_user_mvm|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bid | bigint(20) | NO |  | 商户id | 
 | uid | bigint(20) | NO |  | uid | 
 | uname | varchar(100) | YES |  | 姓名 | 
 | sex | int(3) | YES |  | 性别 | 
 | uphone | bigint(20) | YES |  | 电话 | 
 | birthday | varchar(100) | YES |  | 生日 | 
 | register_sid | bigint(20) | YES |  | 注册门店 |   �    
 | 7dtotalamount | bigint(20) | NO |  | 最近一周消费总额 | 
 | 30dtotalamount | bigint(20) | NO |  | 最近一月消费总额 | 
 | 365dtotalamount | bigint(20) | NO |  | 最近一年消费总额 | 
 | alltotalamount | bigint(20) | NO |  | 历史消费总额 | 
 | 7dconsumepv | bigint(20) | NO |  | 最近一周消费笔数 | 
 | 30dconsumepv | bigint(20) | NO |  | 最近一月消费笔数 | 
 | 365dconsumepv | bigint(20) | NO |  | 最近一年消费笔数 | 
 | allconsumepv | bigint(20) | NO |  | 历史消费笔数 | 
 | 7dincome | bigint(20) | NO |  | 最近一周充值总额 | 
 | 30dincome | bigint(20) | NO |  | 最近一月充值总额 | 
 | 365dincome | bigint(20) | NO |  | 最近一年充值总额 | 
 | allincome | bigint(20) | NO |  | 历史充值总额 | 
 | source_type | tinyint(3) | NO |  |  | 
 | source_qrid | varchar(256) | NO |  |  | 
 | type | int(11) | NO |  | 数据类型 | 
 | lastconsumeday | bigint(20) unsigned | NO | 0 | 距离最后一次消费天数,0为没有消费 | 
cY��%    har(100) | YES |  | 商户名称 | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
 | source | bigint(20) | NO |  |  | 
 | new_user | bigint(20) | NO |  | 新增会员量 | 
 | new_user_consomer | bigint(20) | NO |  | 新增消费会员量 | 
 | new_user_noconsomer | bigint(20) | NO |  | 新增未消费会员量 | 
 | new_user_charger | bigint(20) | NO |  | 新增储值会员量 | 
 | new_user_nocharger | bigint(20) | NO |  | 新增未储值会员量 | 
 | new_unregistered_user | bigint(20) | NO |  | 取消关注会员量 | 
 | all_user | bigint(20) | NO |  | 累计会员量 | 
 | all_user_consomer | bigint(20) | NO |  | 累计新增消费会员量 | 
 | all_user_noconsomer | bigint(20) | NO |  | 累计新增未消费会员量 | 
 | all_user_charger | bigint(20) | NO |  | 累计新增储值会员量 | 
 | all_user_nocharger | bigint(20) | NO |  | 累计新增未储值会员量 | 
 | all_unregistered_user | bigint(20) | NO |  | 累计取消关注会员 | 
cY��%    ----      |
 | id | int(20) unsigned | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | uqId | int(20) | NO |  | 问卷ID | 
 | uid | bigint(20) | NO |  |  | 
 | uname | varchar(128) | YES |  |  | 
 | uphone | bigint(20) | YES |  |  | 
 | uno | varchar(64) | NO |  |  | 
 | ugender | tinyint(3) | YES |  |  | 
 | score | varchar(10) | NO | 0 |  | 
 | uaScoreForStat | varchar(1000) | YES |  |  | 
 | uqConsumeTcId | bigint(20) | NO |  |  | 
 | ConsumeAmont | bigint(20) | NO |  |  | 
 | uaOthers | varchar(2000) | YES |  |  | 
 | uaCreated | datetime | NO |  |  | 
 | aid | int(8) unsigned | NO |  | 活动id | 
 | title0 | int(3) | NO |  |  | 
 | title1 | int(3) | NO |  |  | 
 | title2 | int(3) | NO |  |  | 
 | title3 | int(3) | NO |  |  | 
 | title4 | int(3) | NO |  |  | 
 | title5 | int(3) | NO |  |  | 
 | title6 | int(3) | NO |  |  | 
 | title7 | int(3) | NO |  |  | 
 | title8 | int(3) | NO |  |  | 
 | title9 | int(3) | NO |  |  | 
cY��%     �u          �Z�^  I�Ofrom_apidprpt_welife_user_consume_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) | NO |  |  | 
 | ftime | bigint(20) | NO |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | wxuser_consume_pv | bigint(20) | NO |  | 微信用户消费笔数 | 
cY��%�v�]  G�	from_apidprpt_welife_user_assessments|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|--  ���\  Q�from_apidprpt_welife_user_assessments_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | bigint(20) | NO |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | uqId | int(10) | NO |  |  | 
 | title | varchar(200) | YES |  |  | 
 | score | int(10) | NO |  |  | 
 | options | varchar(200) | YES |  |  | 
 | titleId | int(10) | NO |  | 题目下标 | 
 | aid | int(8) unsigned | NO |  | 活动id | 
cY��%    �� | 
 | tlId | bigint(64) unsigned | NO | 0 | 调整流水id | 
 | bid | int(11) unsigned | NO | 0 | 商家id | 
 | sid | int(11) unsigned | NO | 0 | 门店id | 
 | uid | bigint(64) unsigned | NO | 0 | 用户id | 
 | uphone | bigint(20) unsigned | YES |  | 手机号 | 
 | uno | varchar(64) | YES |  | 卡号 | 
 | tlBusinessType | tinyint(3) unsigned | NO | 0 | 业务类型 1 储值  2 积分 3 优惠券 | 
 | tlAdjustType | tinyint(3) unsigned | NO | 0 | 调整类型 1 增加 2 扣减 | 
 | tlMoney | int(11) unsigned | NO | 0 | 调整金额 | 
 | tlCredit | int(11) unsigned | NO | 0 | 调整积分 | 
 | tlCouponId | int(11) unsigned | NO | 0 | 调整券id | 
 | tlcouponname | varchar(100) | YES |  | 券名称 | 
 | tlCouponNum | int(11) unsigned | NO | 0 | 调整券数量 | 
 | tlRemark | varchar(256) | NO |  | 备注 | 
 | tlOperaterId | int(11) unsigned | YES | 0 | 操作员id | 
 | tloperatername | varchar(50) | YES |  | 操作员名称 | 
 | tlCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
cY��%    ��                                                                                                                                                                                                                                                        �8�j  �=from_apitest2|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | uid | int(10) | NO |  |  | 
 | tccreated | datetime | NO |  |  | 
cY��&��i  '�Sfrom_apifix_xb_1130_b|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | sid | bigint(20) | NO |  |  | 
 | last_unused_charge_amount | bigint(20) | NO |  |  | 
 | last_unused_charge_cash | bigint(20) | NO |  |  | 
cY��&�+�h  e�Ufrom_apifix_uid_dprpt_welife_trade_consume_detail_t2|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | bid | bigint(20) | NO |  |  | 
 | tcid | bigint(20) | NO |  |  | 
 | old_uid | bigint(20) | NO |  |  | 
 | new_uid | bigint(20) | NO |  |  | 
cY��%   ] a]                                                                                                                                                                                                                                                                                                                                                 �x�`  7�from_apidprpt_welife_user_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | bname | varc  ���_  E�Ufrom_apidprpt_welife_user_grade_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) unsigned | NO |  |  | 
 | ftime | int(11) | NO |  | 日期 | 
 | bid | bigint(20) unsigned | NO |  | 商户ID | 
 | total_user_num | bigint(20) unsigned | NO |  | 商户总会员 | 
 | grade_user_num | bigint(20) unsigned | NO |  | 商户有等级会员 | 
cY��%    � � �                                                                                                                                                                                                                              �O�[  ?�Cfrom_apidprpt_welife_trade_manual|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | ftime | int(11) unsigned | NO |  | 日�  ��+�Z  O�kfrom_apidprpt_welife_trade_consume_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | int(11) | NO |  | 时间 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
 | uno | varchar(64) | YES |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tcpaytype | bigint(11)  �    igint(12) | NO | 0 | 过期 | 
 | tclprofit | bigint(20) | NO | 0 | 消费使用储值赠送 | 
 | tclprinciple | bigint(20) | NO | 0 | 消费使用储值本金 | 
 | canceltclprofit | bigint(20) | NO | 0 | 撤销使用储值赠送 | 
 | canceltclprinciple | bigint(20) | NO | 0 | 撤销使用储值本金 | 
 | overduetclprofit | bigint(20) | NO | 0 | 过期使用储值赠送 | 
 | overduetclprinciple | bigint(20) | NO | 0 | 过期使用储值本金 | 
 | sendpoint | bigint(20) | NO | 0 | 赠送积分 | 
 | pointpay | bigint(20) | NO | 0 | 积分抵扣金额 | 
 | tclactivityaddup | bigint(20) | NO | 0 | 参与活动的累计次数 | 
 | aid | bigint(20) | NO | 0 | 活动ID | 
 | remark | varchar(1024) | NO |  | 备注 | 
 | tcsourcetype | int(10) unsigned | NO | 1 | 交易来源类型：1：软POS 2：2：硬POS 3：开放接口 | 
 | tctransnumber | varchar(64) | NO |  | 支付交易订单号 | 
 | uid | bigint(20) unsigned | NO | 1 | uid | 
 | grid | int(11) | NO | 0 | 会员等级，默认为0 | 
cY��$  �| uno | bigint(30) | YES |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tcpaytype | bigint(11) | YES |  | 支付方式 | 
 | tctype | bigint(11) | YES |  | 交易类型 | 
 | tchandle | bigint(11) | YES |  | 操作员ID | 
 | mname | varchar(100) | YES |  | 操作员 | 
 | tclcreated | varchar(100) | YES |  | 交易时间 | 
 | tctotalfee | bigint(20) | NO | 0 | 消费总金额 | 
 | tcfee | bigint(20) | NO | 0 | 实收金额 | 
 | tcstoredpay | bigint(20) | NO | 0 | 储值支付 | 
 | tcgiftcouponpay | bigint(20) | NO | 0 | 礼品券金额 | 
 | tccouponpay | bigint(20) | NO | 0 | 代金券金额 | 
 | usecoupon | varchar(500) | YES |  | 使用代金券 | 
 | usegiftcoupon | varchar(500) | YES |  | 使用礼品券 | 
 | sendcoupon | varchar(500) | YES |  | 发放代金券 | 
 | sendgiftcoupon | varchar(500) | YES |  | 发放礼品券 | 
 | cancelcoupon | varchar(500) | YES |  | 撤销使用代金券 | 
 | cancelgiftcoupon | varchar(500) | YES |  | 撤销使用礼品券 | 
 | overdue | b       |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | qchanneltype | bigint(20) | NO |  | 渠道类型 | 
 | qcname | varchar(200) | YES |  | 渠道名称 | 
 | qdesc | varchar(200) | YES |  | 二维码名称 | 
 | new_user | bigint(20) | NO | 0 | 新增用户 | 
 | new_unregistered_user | bigint(20) | NO | 0 | 新增取消关注用户 | 
 | all_user | bigint(20) | NO | 0 | 累计用户 | 
 | all_unregistered_user | bigint(20) | NO | 0 | 累计取消关注用户 | 
 | qrid | varchar(20) | NO | 0 | 二维码ID | 
 | new_add_consume | bigint(20) | NO | 0 | 新增用户带动消费 | 
 | new_cancel_consume | bigint(20) | NO | 0 | 新增用户带动消费撤销 | 
 | all_add_consume | bigint(20) | NO | 0 | 累计新增用户带动消费 | 
 | all_cancel_consume | bigint(20) | NO | 0 | 累计新增用户带动消费撤销 | 
cY��$                                                                                              2 2                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �>�Y  W�	from_apidprpt_welife_trade_consume_detail_par|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | int(11) | NO |  | 时间 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
   �     coupons             |  array  |   成功参加该活动后，可获得的代金券或礼品券列表。    |  [{&quot;couponid&quot;:&quot;1001&quot;,&quot;name&quot;:&quot;50元代金券&quot;,&quot;amount&quot;:5000,&quot;num&quot;:2,&quot;type&quot;:1},{&quot;couponid&quot;:&quot;1002&quot;,&quot;name&quot;:&quot;飞天神马QQ公仔&quot;,&quot;amount&quot;:0,&quot;num&quot;:1,&quot;type&quot;:2}]       |

**活动返券coupons返回值**

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| couponid              |  int  |   券模板id    |  2000000       |
| name              |  string  |   券名称    |  50元代金券       |
| amount              |  int  |   券面值(单位：分)    |  5000       |
| num              |  int  |   赠送数量    |  2       |
| type              |  int  |   券类型1：代金券，2：礼品券    |  1       |

 **备注** 

- 更多返回错误代码请看错误代码描述


Y���    x  � x                                                                                                            ��X  C�1from_apidprpt_welife_qrcode_channel|字段|类型|空|默认|注释|
|:----    |:-------   ���W  C�Kfrom_apidprpt_welife_partner_view_w|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | paid | bigint(20) | NO |  | 代理商ID | 
 | paname | varchar(200) | NO |  | 代理商名称 | 
 | new_merchant | bigint(20) | NO | 0 | 新增商家数 | 
 | extend_merchant | bigint(20) | NO | 0 | 续约商家数 | 
 | overdue_merchant | bigint(20) | NO | 0 | 到期商家数 | 
 | online_merchant | bigint(20) | NO | 0 | 在线商家数 | 
 | new_store | bigint(20) | NO | 0 | 新增门店数 | 
 | extend_store | bigint(20) | NO | 0 | 续约门店数 | 
 | overdue_store | bigint(20) | NO | 0 | 到期门店数 | 
 | online_store | bigint(20) | NO | 0 | 在线门店数 | 
cY��$    �  �                                                                                                                                                                                                                             ��V  C�Kfrom_apidprpt_welife_partner_view_m|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | paid | bigint(20) | NO |  | 代理商ID | 
 | paname | varchar(200) | NO |  | 代理商名称 | 
 | new_merchant | bigint(20) | NO | 0 | 新增商家数 | 
 | extend_merchant | bigint(20) | NO | 0 | 续约商家数 | 
 | overdue_merchant | bigint(20) | NO | 0 | 到期商家数 | 
 | online_merchant | bigint(20) | NO | 0 | 在线商家数 | 
 | new_store | bigint(20) | NO | 0 | 新增门店数 | 
 | extend_store | bigint(20) | NO | 0 | 续约门店数 | 
 | overdue_store | bigint(20) | NO | 0 | 到期门店数 | 
 | online_store | bigint(20) | NO | 0 | 在线门店数 | 
cY��$    NO | 0 | 过期总金额 | 
 | consume_amount_pv | bigint(20) | YES | 0 | 总消费笔数 | 
 | consume_cash_pv | bigint(20) | YES | 0 | 现金消费笔数 | 
 | consume_prepay_pv | bigint(20) | YES | 0 | 储值消费笔数 | 
 | cancel_amount_pv | bigint(20) | NO | 0 | 撤销总笔数 | 
 | cancel_cash_pv | bigint(20) | NO | 0 | 撤销使用现金笔数 | 
 | cancel_prepay_pv | bigint(20) | NO | 0 | 撤销使用预存笔数 | 
 | overdue_pv | bigint(20) | NO | 0 | 过期总笔数 | 
 | consume_amount_uv | bigint(20) | YES | 0 | 总消费人数 | 
 | consume_cash_uv | bigint(20) | YES | 0 | 现金消费人数 | 
 | consume_prepay_uv | bigint(20) | YES | 0 | 储值消费人数 | 
 | cancel_amount_uv | bigint(20) | NO | 0 | 撤销总人数 | 
 | cancel_cash_uv | bigint(20) | NO | 0 | 撤销使用现金人数 | 
 | cancel_prepay_uv | bigint(20) | NO | 0 | 撤销使用预存人数 | 
 | overdue_uv | bigint(20) | NO | 0 | 过期交易总人数 | 
 | consume_amount_avg | double | YES | 0 | 消费均价 | 
cY��#    �  �                                                                                                                                                                                                                            ��U  C�Mfrom_apidprpt_welife_partner_view_d|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | paid | bigint(20) | NO |  | 代理商ID | 
 | paname | varchar(200) | YES |  | 代理商名称 | 
 | new_merchant | bigint(20) | NO | 0 | 新增商家数 | 
 | extend_merchant | bigint(20) | NO | 0 | 续约商家数 | 
 | overdue_merchant | bigint(20) | NO | 0 | 到期商家数 | 
 | online_merchant | bigint(20) | NO | 0 | 在线商家数 | 
 | new_store | bigint(20) | NO | 0 | 新增门店数 | 
 | extend_store | bigint(20) | NO | 0 | 续约门店数 | 
 | overdue_store | bigint(20) | NO | 0 | 到期门店数 | 
 | online_store | bigint(20) | NO | 0 | 在线门店数 | 
cY��$    �  �                                                                                                                                                                             �E�S  ?�/from_apidprpt_welife_cross_credit|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | int(11) | NO |  |  日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | usedsid | bigint(20) | NO |  | 使用积分门店ID | 
 | creditsid | bigint(20) | NO |  | 积分门店ID | 
 | uno | varchar(64) | NO |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tctype | bigint(11) | NO |  | 交易类型2手工扣减5积分抵扣6积分抵扣撤销8积分换礼9积分换礼撤销 | 
 | tclcreated | datetime | NO |  | 交易时间 | 
 | creditnum | bigint(20) | YES | 0 | 储值支付 | 
 | tcsourcetype | int(3) | NO | 1 | 消费来源 | 
cY��$   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          �(�T  E�ofrom_apidprpt_welife_partitions_test|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) | NO |  |  | 
 | ftime | int(10) | NO |  |  | 
 | htime | int(10) | NO |  |  | 
 | bid | int(10) | NO |  |  | 
 | sid | int(10) | NO |  |  | 
cY��$   b b                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ��R  I�Ofrom_apidprpt_welife_cross_credit_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | YES |  | 日期 | 
 | bid | bigint(20) | YES | 0 | 商户ID | 
 | sid | bigint(20) | YES | 0 | 门店ID | 
 | rececredit | bigint(20) | YES | 0 | 应收积分 | 
 | paycredit | bigint(20) | YES | 0 | 应付积分 | 
cY��$    2  2                                        �J�Q  ?�9from_apidprpt_welife_cross_coupon|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | int(11) | NO |  |  日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | usedsid | bigint(20) | NO |  | 使用优惠券门店ID | 
 | sendsid | bigint(20) | NO |  | 发放优惠券门店ID | 
 | uno | varchar(64) | NO |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tctype | bigint(11) | NO |  | 交易类型2消费3撤销消费11手工扣减 | 
 | tclcreated | datetime | NO |  | 交易时间 | 
 | couponid | bigint(20) | YES | 0 | 券ID | 
 | couponname | varchar(100) | YES |  | 券ID | 
 | coupontype | int(10) | NO |  | 券类型1代金券2礼品券 | 
 | couponnum | bigint(20) | YES | 0 | 券数量 | 
 | couponmoney | bigint(20) | YES | 0 | 券抵扣金额 | 
cY��$   � �                                                                                                                                                                                                                                                                                                                                                                                                                           �W�P  I�Ifrom_apidprpt_welife_cross_coupon_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | coupontype | int(10) | NO |  | 券类型 | 
 | rececouponnum | bigint(20) | NO | 0 | 应收券数量 | 
 | rececouponmoney | bigint(20) | NO | 0 | 应收券抵扣金额 | 
 | paycouponnum | bigint(20) | NO | 0 | 应付券数量 | 
 | paycouponmoney | bigint(20) | NO | 0 | 应付券抵扣金额 | 
cY��$   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �.�N  I�wfrom_apidprpt_welife_cross_charge_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | recetcstoredpay | bigint(20) | NO | 0 | 应收储值金额 | 
 | recetclprinciple | bigint(20) | NO | 0 | 应收储值现金 | 
 | paytcstoredpay | bigint(20) | NO | 0 | 应付储值金额 | 
 | paytclprinciple | bigint(20) | NO | 0 | 应付储值现金 | 
cY��$    {  {                                                                                                                 ��O  ?�'from_apidprpt_welife_cross_charge|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | int(11) | NO |  |  日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tcid | bigint(60) | NO |  | 原始流水号 | 
 | tcrelateid | bigint(60) | YES |  | 撤销流水号 | 
 | usedsid | bigint(20) | NO |  | 使用储值门店ID | 
 | chargesid | bigint(20) | NO |  | 储值门店ID | 
 | uno | varchar(64) | NO |  | 卡号 | 
 | uphone | bigint(11) | YES |  | 手机号 | 
 | tctype | bigint(11) | NO |  | 交易类型 | 
 | tcstoredpay | bigint(20) | YES | 0 | 储值支付 | 
 | tclprofit | bigint(20) | YES | 0 | 消费使用储值赠送 | 
 | tclprinciple | bigint(20) | YES | 0 | 消费使用储值本金 | 
 | tclcreated | datetime | NO |  | 交易时间 | 
 | tcsourcetype | int(3) | NO | 1 | 消费来源 | 
cY��$    ;  ;                                                 �A�M  A�%from_apidprpt_welife_credit_xb_old|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO | 0 |  | 
 | ftime | int(11) | NO |  | 日期 | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | credit_reward | bigint(20) | NO | 0 | 奖励积分 | 
 | credit_consume | bigint(20) | NO | 0 | 抵现积分 | 
 | credit_gift | bigint(20) | NO | 0 | 换礼积分 | 
 | cancel_credit_consume | bigint(20) | NO | 0 | 撤销抵现积分 | 
 | cancel_credit_gift | bigint(20) | NO | 0 | 撤销换礼积分 | 
 | credit_amount_unused | bigint(20) | NO | 0 | 未使用积分 | 
 | credit_manual | bigint(20) | NO | 0 | 积分手工调账 | 
 | opencard_send | bigint(20) | NO | 0 | 开卡赠送积分 | 
 | opencard_event_send | bigint(20) unsigned | NO | 0 | 开卡事件赠送积分 | 
 | upgrade_event_send | bigint(20) unsigned | NO | 0 | 升级事件赠送积分 | 
cY��$    5  � 5                                         �~�L  3�-from_apidprpt_welife_credit|字段|类型|空|默认|注释|
|:----    |:-------    |:---  ˆX�K  =�Wfrom_apidprpt_welife_coupon_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  | 自增主键 | 
 | ftime | int(11) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | tctotalfee | bigint(20) | NO | 0 | 券带动消费金额 | 
 | canceltctotalfee | bigint(20) | NO | 0 | 撤销消费中包含券的消费金额 | 
 | sendcoupon | bigint(20) | NO | 0 | 券发送数量 | 
 | usedcoupon | bigint(20) | NO | 0 | 使用代金券数量 | 
 | usedgift | bigint(20) | NO | 0 | 使用礼品券数量 | 
 | cancelusedcoupon | bigint(20) | NO | 0 | 撤销使用代金券数量 | 
 | cancelusedgift | bigint(20) | NO | 0 | 撤销使用礼品券数量 | 
 | overduecoupon | bigint(20) | NO | 0 | 券过期数量 | 
 | coupon_manual | bigint(20) | NO | 0 | 券手工调账 | 
cY��#     |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | int(11) | NO |  | 日期 | 
 | bid | bigint(20) | NO | 0 | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | credit_reward | bigint(20) | NO | 0 | 奖励积分 | 
 | credit_consume | bigint(20) | NO | 0 | 抵现积分 | 
 | credit_gift | bigint(20) | NO | 0 | 换礼积分 | 
 | cancel_credit_consume | bigint(20) | NO | 0 | 撤销抵现积分 | 
 | cancel_credit_gift | bigint(20) | NO | 0 | 撤销换礼积分 | 
 | credit_amount_unused | bigint(20) | NO | 0 | 未使用积分 | 
 | credit_manual | bigint(20) | NO | 0 | 积分手工调账 | 
 | opencard_send | bigint(20) | NO | 0 | 开卡赠送积分 | 
 | opencard_event_send | bigint(20) unsigned | NO | 0 | 开卡事件赠送积分 | 
 | upgrade_event_send | bigint(20) unsigned | NO | 0 | 升级事件赠送积分 | 
 | charge_award_credit | bigint(20) | NO | 0 | 储值赠送积分 | 
cY��#                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   �p�J  =�from_apidprpt_welife_core_data_w|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | paid | bigint(20) | NO |  | 代理商ID | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | new_user | bigint(20) | NO | 0 | 新增会员 | 
 | new_unregistered_user | bigint(20) | NO | 0 | 新增取消关注会员 | 
 | new_storage_user | bigint(20) | NO |  �     0 | 新增保有会员 | 
 | new_storage_unregistered_user | bigint(20) | NO | 0 | 新增取消保有会员 | 
 | active_user | bigint(20) | NO | 0 | 活跃会员 | 
 | same_trade_pv | bigint(20) | NO | 0 | 当天交易笔数 | 
 | same_cancel_trade_pv | bigint(20) | NO | 0 | 当天撤销交易笔数 | 
 | same_trade_amount | bigint(20) | NO | 0 | 当天交易总额 | 
 | same_cancel_trade_amount | bigint(20) | NO | 0 | 当天撤销交易总额 | 
 | all_user | bigint(20) | NO | 0 | 累计会员 | 
 | all_unregistered_user | bigint(20) | NO | 0 | 累计取消关注会员 | 
 | all_storage_user | bigint(20) | NO | 0 | 累计保有会员 | 
 | all_storage_unregistered_user | bigint(20) | NO | 0 | 累计取消保有会员 | 
 | all_trade_pv | bigint(20) | NO | 0 | 累计交易笔数 | 
 | all_cancel_trade_pv | bigint(20) | NO | 0 | 累计撤销交易笔数 | 
 | all_trade_amount | bigint(20) | NO | 0 | 累计交易总额 | 
 | all_cancel_trade_amount | bigint(20) | NO | 0 | 累计撤销交易总额 | 
cY��#    � � �                                                                                                                                                                                         �p�I  =�from_apidprpt_welife_core_data_m|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | paid | bigint(20) | NO |  | 代理商ID | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | new_user | bigint(20) | NO | 0 | 新增会员 | 
 | new_unregistered_user | bigint(20) | NO | 0 | 新增取消关注会员 | 
 | new_storage_user | bigint(20) | NO |  Ͳ�H  =�efrom_apidprpt_welife_core_data_h|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | bigint(20) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | htime | bigint(10) | NO |  | 小时 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | N  �     0 | 新增保有会员 | 
 | new_storage_unregistered_user | bigint(20) | NO | 0 | 新增取消保有会员 | 
 | active_user | bigint(20) | NO | 0 | 活跃会员 | 
 | same_trade_pv | bigint(20) | NO | 0 | 当天交易笔数 | 
 | same_cancel_trade_pv | bigint(20) | NO | 0 | 当天撤销交易笔数 | 
 | same_trade_amount | bigint(20) | NO | 0 | 当天交易总额 | 
 | same_cancel_trade_amount | bigint(20) | NO | 0 | 当天撤销交易总额 | 
 | all_user | bigint(20) | NO | 0 | 累计会员 | 
 | all_unregistered_user | bigint(20) | NO | 0 | 累计取消关注会员 | 
 | all_storage_user | bigint(20) | NO | 0 | 累计保有会员 | 
 | all_storage_unregistered_user | bigint(20) | NO | 0 | 累计取消保有会员 | 
 | all_trade_pv | bigint(20) | NO | 0 | 累计交易笔数 | 
 | all_cancel_trade_pv | bigint(20) | NO | 0 | 累计撤销交易笔数 | 
 | all_trade_amount | bigint(20) | NO | 0 | 累计交易总额 | 
 | all_cancel_trade_amount | bigint(20) | NO | 0 | 累计撤销交易总额 | 
cY��#    ) | NO | 0 | 储值过期金额本金 | 
 | credit_overdue | bigint(20) | NO | 0 | 积分过期 | 
 | credit_opencard | bigint(20) | NO | 0 | 开卡事件赠送积分 | 
 | credit_upgrade | bigint(20) | NO | 0 | 升级事件赠送积分 | 
 | charge_pay_opencard | bigint(20) | NO | 0 | 开卡事件赠送储值 | 
 | charge_pay_upgrade | bigint(20) | NO | 0 | 升级事件赠送储值 | 
 | manual_deduction_charge_cash | bigint(20) | NO | 0 | 手工扣减储值本金 | 
 | manual_deduction_charge_present | bigint(20) | NO | 0 | 手工扣减储值赠送 | 
 | manual_add_charge_cash | bigint(20) | NO |  | 手工增加储值本金 | 
 | manual_add_charge_present | bigint(20) | NO |  | 手工增加储值赠送 | 
 | consume_gt0_pv | int(20) | NO | 0 | 消费金额大于0的笔数 | 
 | cancel_consume_gt0_pv | int(20) | NO | 0 | 消费金额大于0的撤销笔数 | 
 | charge_award_credit | int(20) | NO |  | 充值奖励积分 | 
 | cancel_charge_award_credit | int(20) | NO |  | 撤销充值奖励积分 | 
cY��#  �0) | NO |  | 撤销奖励储值金额 | 
 | manual_add_charge | bigint(20) | NO |  | 手工增加储值 | 
 | manual_deduction_charge | bigint(20) | NO |  | 手工扣减储值 | 
 | manual_add_credit | bigint(20) | NO |  | 手工增加积分 | 
 | manual_deduction_credit | bigint(20) | NO |  | 手工扣减积分 | 
 | manual_add_coupon | bigint(20) | NO |  | 手工增加券 | 
 | manual_deduction_coupon | bigint(20) | NO |  | 手工扣减券 | 
 | charge_pay_card | bigint(20) | NO |  | 储值实收（储值卡支付） | 
 | cancel_charge_pay_card | bigint(20) | NO |  | 撤销储值实收（储值卡支付） | 
 | last_unused_charge_amount | bigint(20) | NO |  | 上一小时预存剩余总额 | 
 | last_unused_charge_cash | bigint(20) | NO |  | 上一小时预存剩余本金 | 
 | dtime | bigint(20) | NO | 0 | 详细时间(日期 小时) | 
 | last_unused_credit | bigint(20) | NO |  | 积分余额 | 
 | charge_amount_overdue | bigint(20) | NO | 0 | 储值过期金额 | 
 | charge_cash_overdue | bigint(20  �(20) | NO |  | 储值实收（支付方式现金1） | 
 | cancel_charge_pay_cash | bigint(20) | NO |  | 撤销储值实收（支付方式现金1） | 
 | charge_pay_bank | bigint(20) | NO |  | 储值实收（支付方式银行卡2） | 
 | cancel_charge_pay_bank | bigint(20) | NO |  | 撤销储值实收（支付方式银行卡2） | 
 | charge_pay_wechat_online | bigint(20) | NO |  | 储值实收（支付方式微信3） | 
 | cancel_charge_pay_wechat_online | bigint(20) | NO |  | 撤销储值实收（支付方式微信3） | 
 | charge_pay_wechat_offline | bigint(20) | NO |  | 储值实收（店内微信支付5） | 
 | cancel_charge_pay_wechat_offline | bigint(20) | NO |  | 撤销储值实收（店内微信支付5） | 
 | charge_pay_alipay | bigint(20) | NO |  | 储值实收（支付方式支付宝4） | 
 | cancel_charge_pay_alipay | bigint(20) | NO |  | 撤销储值实收（支付方式支付宝4） | 
 | charge_present | bigint(20) | NO |  | 奖励储值金额 | 
 | cancel_charge_present | bigint(2  �0) | NO |  | 使用代金券 | 
 | cancel_usecoupon | bigint(20) | NO |  | 撤销使用代金券 | 
 | tcgiftcouponpay | bigint(20) | NO |  | 礼品券抵扣 | 
 | cancel_tcgiftcouponpay | bigint(20) | NO |  | 撤销礼品券抵扣 | 
 | usegiftcoupon | bigint(20) | NO |  | 使用礼品券张数 | 
 | cancel_usegiftcoupon | bigint(20) | NO |  | 撤销使用礼品券 | 
 | tcawardcredit | bigint(20) | NO |  | 奖励积分 | 
 | cancel_tcawardcredit | bigint(20) | NO |  | 撤销奖励积分 | 
 | credit_gift | bigint(20) | NO |  | 换礼积分 | 
 | cancel_credit_gift | bigint(20) | NO |  | 撤销换礼积分 | 
 | charge_pv | bigint(20) | NO |  | 充值笔数 | 
 | cancel_charge_pv | bigint(20) | NO |  | 撤销充值笔数 | 
 | charge_amount | bigint(20) | NO |  | 充值金额 | 
 | cancel_charge_amount | bigint(20) | NO |  | 撤销充值金额 | 
 | charge_cash | bigint(20) | NO |  | 充值实收金额 | 
 | cancel_charge_cash | bigint(20) | NO |  | 撤销充值实收金额 | 
 | charge_pay_cash | bigint  �_pay_wechat_offline | bigint(20) | NO |  | 店内微信支付3 | 
 | cancel_tcfee_pay_wechat_offline | bigint(20) | NO |  | 撤销店内微信支付3 | 
 | tcfee_pay_alipay | bigint(20) | NO |  | 实收金额（支付宝支付4） | 
 | cancel_tcfee_pay_alipay | bigint(20) | NO |  | 撤销实收金额（支付宝支付4） | 
 | tcstoredpay | bigint(20) | NO |  | 使用储值金额 | 
 | cancel_tcstoredpay | bigint(20) | NO |  | 撤销使用储值金额 | 
 | tclprofit | bigint(20) | NO |  | 使用赠送储值实收金额 | 
 | cancel_tclprofit | bigint(20) | NO |  | 撤销使用赠送储值实收金额 | 
 | tclprinciple | bigint(20) | NO |  | 使用储值金额 | 
 | cancel_tclprinciple | bigint(20) | NO |  | 撤销使用储值金额 | 
 | tccreditpay | bigint(20) | NO |  | 积分抵扣 | 
 | cancel_tccreditpay | bigint(20) | NO |  | 撤销积分抵扣 | 
 | tccouponpay | bigint(20) | NO |  | 代金券抵扣 | 
 | cancel_tccouponpay | bigint(20) | NO |  | 撤销代金券抵扣 | 
 | usecoupon | bigint(2    �  �                                                                                                                                                                                                         ��G  E�Ifrom_apidprpt_welife_core_data_h_par|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | bigint(20) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | htime | bigint(10) | NO |  | 小时 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | grid | bigint(20) | NO |  | 会员等级ID | 
 | consume_pv | bigint(20) | NO |  | 消费笔数 | 
 | cancel_consume_pv | bigint(20) | NO |  | 撤销消费笔数 | 
 | consume_totalfee | bigint(20) | NO |  | 消费总金额 | 
 | cancel_consume_totalfee | bigint(20) | NO |  | 撤销消费总金额 | 
 | tcfee | bigint(20) | NO |  | 消费实收金额总计 | 
 | cancel_tcfee | bigint(20) | NO |  | 撤销消费实收金额总计 | 
 | tcfee_pay_cash | bigint(20) |   �    销储值实收（支付方式微信3） | 
 | charge_pay_wechat_offline | bigint(20) | NO |  | 储值实收（店内微信支付5） | 
 | cancel_charge_pay_wechat_offline | bigint(20) | NO |  | 撤销储值实收（店内微信支付5） | 
 | charge_pay_alipay | bigint(20) | NO |  | 储值实收（支付方式支付宝4） | 
 | cancel_charge_pay_alipay | bigint(20) | NO |  | 撤销储值实收（支付方式支付宝4） | 
 | charge_present | bigint(20) | NO |  | 奖励储值金额 | 
 | cancel_charge_present | bigint(20) | NO |  | 撤销奖励储值金额 | 
 | manual_add_charge | bigint(20) | NO |  | 手工增加储值 | 
 | manual_deduction_charge | bigint(20) | NO |  | 手工扣减储值 | 
 | manual_add_credit | bigint(20) | NO |  | 手工增加积分 | 
 | manual_deduction_credit | bigint(20) | NO |  | 手工扣减积分 | 
 | manual_add_coupon | bigint(20) | NO |  | 手工增加券 | 
 | manual_deduction_coupon | bigint(20) | NO |  | 手工扣减券 | 
 | dtime | bigint(20) | NO |  |  | 
cY��#  �分 | 
 | credit_gift | bigint(20) | NO |  | 换礼积分 | 
 | cancel_credit_gift | bigint(20) | NO |  | 撤销换礼积分 | 
 | charge_pv | bigint(20) | NO |  | 充值笔数 | 
 | cancel_charge_pv | bigint(20) | NO |  | 撤销充值笔数 | 
 | charge_amount | bigint(20) | NO |  | 充值金额 | 
 | cancel_charge_amount | bigint(20) | NO |  | 撤销充值金额 | 
 | charge_cash | bigint(20) | NO |  | 充值实收金额 | 
 | cancel_charge_cash | bigint(20) | NO |  | 撤销充值实收金额 | 
 | charge_pay_cash | bigint(20) | NO |  | 储值实收（支付方式现金1） | 
 | cancel_charge_pay_cash | bigint(20) | NO |  | 撤销储值实收（支付方式现金1） | 
 | charge_pay_bank | bigint(20) | NO |  | 储值实收（支付方式银行卡2） | 
 | cancel_charge_pay_bank | bigint(20) | NO |  | 撤销储值实收（支付方式银行卡2） | 
 | charge_pay_wechat_online | bigint(20) | NO |  | 储值实收（支付方式微信3） | 
 | cancel_charge_pay_wechat_online | bigint(20) | NO |  | 撤  �O |  | 使用储值实收金额 | 
 | cancel_tclprofit | bigint(20) | NO |  | 撤销使用储值实收金额 | 
 | tclprinciple | bigint(20) | NO |  | 使用储值奖励金额 | 
 | cancel_tclprinciple | bigint(20) | NO |  | 撤销使用储值奖励金额 | 
 | tccreditpay | bigint(20) | NO |  | 积分抵扣 | 
 | cancel_tccreditpay | bigint(20) | NO |  | 撤销积分抵扣 | 
 | tccouponpay | bigint(20) | NO |  | 代金券抵扣 | 
 | cancel_tccouponpay | bigint(20) | NO |  | 撤销代金券抵扣 | 
 | usecoupon | bigint(20) | NO |  | 使用代金券 | 
 | cancel_usecoupon | bigint(20) | NO |  | 撤销使用代金券 | 
 | tcgiftcouponpay | bigint(20) | NO |  | 礼品券抵扣 | 
 | cancel_tcgiftcouponpay | bigint(20) | NO |  | 撤销礼品券抵扣 | 
 | usegiftcoupon | bigint(20) | NO |  | 使用礼品券张数 | 
 | cancel_usegiftcoupon | bigint(20) | NO |  | 撤销使用礼品券 | 
 | tcawardcredit | bigint(20) | NO |  | 奖励积分 | 
 | cancel_tcawardcredit | bigint(20) | NO |  | 撤销奖励积  �NO |  | 消费实收金额（现金支付方式1） | 
 | cancel_tcfee_pay_cash | bigint(20) | NO |  | 撤销消费实收金额（现金支付方式1） | 
 | tcfee_pay_bank | bigint(20) | NO |  | 实收金额（银行卡支付方式2） | 
 | cancel_tcfee_pay_bank | bigint(20) | NO |  | 撤销实收金额（银行卡支付方式2） | 
 | tcfee_pay_wechat_online | bigint(20) | NO |  | 实收金额（微信支付6） | 
 | cancel_tcfee_pay_wechat_online | bigint(20) | NO |  | 撤销实收金额（微信支付6） | 
 | tcfee_pay_wechat_offline | bigint(20) | NO |  | 店内微信支付3 | 
 | cancel_tcfee_pay_wechat_offline | bigint(20) | NO |  | 撤销店内微信支付3 | 
 | tcfee_pay_alipay | bigint(20) | NO |  | 实收金额（支付宝支付4） | 
 | cancel_tcfee_pay_alipay | bigint(20) | NO |  | 撤销实收金额（支付宝支付4） | 
 | tcstoredpay | bigint(20) | NO |  | 使用储值金额 | 
 | cancel_tcstoredpay | bigint(20) | NO |  | 撤销使用储值金额 | 
 | tclprofit | bigint(20) | N  �O |  | 门店ID | 
 | grid | bigint(20) | NO |  | 会员等级ID | 
 | consume_pv | bigint(20) | NO |  | 消费笔数 | 
 | cancel_consume_pv | bigint(20) | NO |  | 撤销消费笔数 | 
 | consume_totalfee | bigint(20) | NO |  | 消费总金额 | 
 | cancel_consume_totalfee | bigint(20) | NO |  | 撤销消费总金额 | 
 | tcfee | bigint(20) | NO |  | 消费实收金额总计 | 
 | cancel_tcfee | bigint(20) | NO |  | 撤销消费实收金额总计 | 
 | tcfee_pay_cash | bigint(20) | NO |  | 消费实收金额（现金支付方式1） | 
 | cancel_tcfee_pay_cash | bigint(20) | NO |  | 撤销消费实收金额（现金支付方式1） | 
 | tcfee_pay_bank | bigint(20) | NO |  | 实收金额（银行卡支付方式2） | 
 | cancel_tcfee_pay_bank | bigint(20) | NO |  | 撤销实收金额（银行卡支付方式2） | 
 | tcfee_pay_wechat_online | bigint(20) | NO |  | 实收金额（微信支付6） | 
 | cancel_tcfee_pay_wechat_online | bigint(20) | NO |  | 撤销实收金额（微信支付6） | 
 | tcfee   � �                                                                                                                                                                                                                                                                                                                                                                                                                    �V�F  =�Sfrom_apidprpt_welife_core_data_d|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(11) | NO |  |  | 
 | ftime | bigint(20) | NO |  | 日期 | 
 | paid | bigint(20) | NO |  | 代理商ID | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO | 0 | 门店ID | 
 | new_user | bigint(20) | NO | 0 | 新增会员 | 
 | new_unregistered_user | bigint(20) | NO | 0 | 新增取消关注会员 | 
 | new_storage_user | bigint(20) | NO | 0 | 新增保有会员 | 
 | new_storage_unregistered_user | bigint(20) | NO | 0 | 新增取消保有  �    会员 | 
 | active_user | bigint(20) | NO | 0 | 活跃会员 | 
 | same_trade_pv | bigint(20) | NO | 0 | 当天交易笔数 | 
 | same_cancel_trade_pv | bigint(20) | NO | 0 | 当天撤销交易笔数 | 
 | same_trade_amount | bigint(20) | NO | 0 | 当天交易总额 | 
 | same_cancel_trade_amount | bigint(20) | NO | 0 | 当天撤销交易总额 | 
 | all_user | bigint(20) | NO | 0 | 累计会员 | 
 | all_unregistered_user | bigint(20) | NO | 0 | 累计取消关注会员 | 
 | all_storage_user | bigint(20) | NO | 0 | 累计保有会员 | 
 | all_storage_unregistered_user | bigint(20) | NO | 0 | 累计取消保有会员 | 
 | all_trade_pv | bigint(20) | NO | 0 | 累计交易笔数 | 
 | all_cancel_trade_pv | bigint(20) | NO | 0 | 累计撤销交易笔数 | 
 | all_trade_amount | bigint(20) | NO | 0 | 累计交易总额 | 
 | all_cancel_trade_amount | bigint(20) | NO | 0 | 累计撤销交易总额 | 
 | bname | varchar(100) | YES |  | 商户名称 | 
 | sname | varchar(100) | YES |  | 门店名称 | 
cY��#   R R                                                                                                                                                                                                                                                                                                                                        �"�E  =�kfrom_apidprpt_welife_consume_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | YES |  | 门店ID | 
 | consume_amount | bigint(20) | YES | 0 | 消费总金额 | 
 | consume_cash | bigint(20) | YES | 0 | 消费使用现金 | 
 | consume_prepay | bigint(20) | YES | 0 | 消费使用预存 | 
 | cancel_amount | bigint(20) | NO | 0 | 撤销总金额 | 
 | cancel_cash | bigint(20) | NO | 0 | 撤销现金 | 
 | cancel_prepay | bigint(20) | NO | 0 | 撤销预存 | 
 | overdue_amount | bigint(20) |   �    NO | 0 | 过期总金额 | 
 | consume_amount_pv | bigint(20) | YES | 0 | 总消费笔数 | 
 | consume_cash_pv | bigint(20) | YES | 0 | 现金消费笔数 | 
 | consume_prepay_pv | bigint(20) | YES | 0 | 储值消费笔数 | 
 | cancel_amount_pv | bigint(20) | NO | 0 | 撤销总笔数 | 
 | cancel_cash_pv | bigint(20) | NO | 0 | 撤销使用现金笔数 | 
 | cancel_prepay_pv | bigint(20) | NO | 0 | 撤销使用预存笔数 | 
 | overdue_pv | bigint(20) | NO | 0 | 过期总笔数 | 
 | consume_amount_uv | bigint(20) | YES | 0 | 总消费人数 | 
 | consume_cash_uv | bigint(20) | YES | 0 | 现金消费人数 | 
 | consume_prepay_uv | bigint(20) | YES | 0 | 储值消费人数 | 
 | cancel_amount_uv | bigint(20) | NO | 0 | 撤销总人数 | 
 | cancel_cash_uv | bigint(20) | NO | 0 | 撤销使用现金人数 | 
 | cancel_prepay_uv | bigint(20) | NO | 0 | 撤销使用预存人数 | 
 | overdue_uv | bigint(20) | NO | 0 | 过期交易总人数 | 
 | consume_amount_avg | double | YES | 0 | 消费均价 | 
cY��#   t t                                                                                                                                                                                                                                                                                                                                                                          � �D  C�!from_apidprpt_welife_consume_bid_xx|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  | 日期 | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | consume_amount | bigint(20) | YES | 0 | 消费总金额 | 
 | consume_cash | bigint(20) | YES | 0 | 消费使用现金 | 
 | consume_prepay | bigint(20) | YES | 0 | 消费使用预存 | 
 | cancel_amount | bigint(20) | NO | 0 | 撤销总金额 | 
 | cancel_cash | bigint(20) | NO | 0 | 撤销现金 | 
 | cancel_prepay | bigint(20) | NO | 0 | 撤销预存 | 
 | overdue_amount | bigint(20) |   �   } }                                                                                                                                                                                                                                                                                                                                                                                   �w�C  =�from_apidprpt_welife_consume_bid|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | consume_amount | bigint(20) | YES | 0 | 消费总金额 | 
 | consume_cash | bigint(20) | YES | 0 | 消费使用现金 | 
 | consume_prepay | bigint(20) | YES | 0 | 消费使用预存 | 
 | cancel_amount | bigint(20) | NO | 0 | 撤销总金额 | 
 | cancel_cash | bigint(20) | NO | 0 | 撤销现金 | 
 | cancel_prepay | bigint(20) | NO | 0 | 撤销预存 | 
 | overdue_amount | bigint(20) |   �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           �s�I 	+�!showdoc	绑定实体卡
    
**简要描述：** 

- 绑定或更换实体卡，电子卡可绑定实体卡，已存在实体卡可重新绑定更换
- 电子卡绑定实体卡，根据商家后台设置，可不需要验证码
- 实�  �   � �                                                                                                                                                                                                                                                                                                                                                                                                              �\�B  ;�afrom_apidprpt_welife_charge_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | bname | varchar(100) | YES |  | 商户名称 | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
 | charge_amount | bigint(20) | YES | 0 | 储值总金额 | 
 | charge_cash | bigint(20) | YES | 0 | 实收金额 | 
 | charge_present | bigint(20) | YES | 0 | 奖励金额 | 
 | charge_amount_pv | bigint(20) | YES | 0 | 储�  �    ��笔数 | 
 | charge_amount_unused | bigint(20) | YES | 0 | 沉淀金额 | 
 | ruleid | varchar(100) | YES |  | 储值规则ID | 
 | crlrule | varchar(2048) | YES |  | 储值规则名称 | 
 | cancel_charge_amount | bigint(20) | NO | 0 | 撤销储值总金额 | 
 | cancel_charge_cash | bigint(20) | NO | 0 | 撤销储值实收金额 | 
 | cancel_charge_present | bigint(20) | NO | 0 | 撤销储值赠送金额 | 
 | cancel_charge_amount_pv | bigint(20) | NO | 0 | 撤销储值笔数 | 
 | chargetype | int(11) | NO | 0 | 支付方式 | 
 | charge_cash_unused | bigint(20) | NO | 0 | 累计未使用储值中的本金 | 
 | award_coupon_num | bigint(20) | NO | 0 | 奖励代金券数量 | 
 | award_coupon_amount | bigint(20) | NO | 0 | 奖励代金券金额 | 
 | award_gift_num | bigint(20) | NO | 0 | 奖励礼品券数量 | 
 | award_gift_amount | bigint(20) | NO | 0 | 奖励礼品券金额 | 
 | tcsourcetype | int(10) | NO | 1 | 来源类型 | 
 | award_credit | bigint(20) | NO | 0 | 储值奖励积分 | 
cY��#    NO | 0 | 过期总金额 | 
 | consume_amount_pv | bigint(20) | YES | 0 | 总消费笔数 | 
 | consume_cash_pv | bigint(20) | YES | 0 | 现金消费笔数 | 
 | consume_prepay_pv | bigint(20) | YES | 0 | 储值消费笔数 | 
 | cancel_amount_pv | bigint(20) | NO | 0 | 撤销总笔数 | 
 | cancel_cash_pv | bigint(20) | NO | 0 | 撤销使用现金笔数 | 
 | cancel_prepay_pv | bigint(20) | NO | 0 | 撤销使用预存笔数 | 
 | overdue_pv | bigint(20) | NO | 0 | 过期总笔数 | 
 | consume_amount_uv | bigint(20) | YES | 0 | 总消费人数 | 
 | consume_cash_uv | bigint(20) | YES | 0 | 现金消费人数 | 
 | consume_prepay_uv | bigint(20) | YES | 0 | 储值消费人数 | 
 | cancel_amount_uv | bigint(20) | NO | 0 | 撤销总人数 | 
 | cancel_cash_uv | bigint(20) | NO | 0 | 撤销使用现金人数 | 
 | cancel_prepay_uv | bigint(20) | NO | 0 | 撤销使用预存人数 | 
 | overdue_uv | bigint(20) | NO | 0 | 过期交易总人数 | 
 | consume_amount_avg | double | YES | 0 | 消费均价 | 
cY��#   M /M                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �V�A  A�Ofrom_apidprpt_welife_charge_d_stat|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(10) | NO |  |  | 
 | bid | bigint(20) | NO  �A�@  A�%from_apidprpt_welife_charge_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) unsigned | NO |  |  | 
 | ftime | int(20) | NO |  | �  �     |  |  | 
 | sid | bigint(20) | NO |  |  | 
 | charge_mount | bigint(20) | NO | 0 | 充值金额 | 
 | charge_cash | bigint(20) | NO | 0 | 实收金额 | 
 | charge_present | bigint(20) | NO | 0 | 奖励金额 | 
 | charge_mount_value_card | bigint(20) | NO | 0 | 储值卡充值金额 | 
 | charge_mount_manual_add | bigint(20) | NO | 0 | 手工增加金额 | 
 | charge_mount_manual_reduce | bigint(20) | NO | 0 | 手工扣减金额 | 
 | charge_mount_pos | bigint(20) | NO | 0 | pos使用储值金额 | 
 | charge_mount_mall | bigint(20) | NO | 0 | 商城使用储值金额 | 
 | charge_mount_overdue | bigint(20) | NO | 0 | 过期金额 | 
 | charge_mount_opencard | bigint(20) | NO | 0 | 开卡赠送储值 | 
 | charge_mount_upgrade | bigint(20) | NO | 0 | 升级赠送储值 | 
 | charge_mount_waimai | bigint(20) | NO | 0 | 外卖使用储值金额 | 
 | charge_mount_selfpay | bigint(20) | NO | 0 | 自助买单使用金额 | 
 | charge_mount_quanbao | bigint(20) | NO | 0 | 购买券包使用的储值 | 
cY��#  �期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | bname | varchar(100) | YES |  | 商户名称 | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | sname | varchar(100) | YES |  | 门店名称 | 
 | tcid | bigint(20) | YES |  | 流水号 | 
 | ucid | varchar(64) | YES |  | 卡号 | 
 | mobile | bigint(20) | YES |  | 手机号 | 
 | tradetime | datetime | YES |  | 交易时间 | 
 | charge_amount | bigint(20) | YES | 0 | 充值金额 | 
 | charge_cash | bigint(20) | YES | 0 | 实收金额 | 
 | charge_present | bigint(20) | YES | 0 | 奖励金额 | 
 | charge_type | int(11) | YES |  | 支付方式 | 
 | hasreceipt | int(11) | YES |  | 是否已开发票 | 
 | operater | varchar(100) | YES |  | 操作员 | 
 | tctype | int(11) | NO | 1 | 储值类型 | 
 | tcrelateid | bigint(20) | NO | 0 | 关联被撤销储值流水 | 
 | operaterid | bigint(20) | YES | 0 | 操作员ID | 
 | awardcouponid | int(11) unsigned | NO | 0 | 奖励优惠券Id | 
 | awardcouponname | varchar(2048) | YES |  | 奖励优惠券名称 |     
 | awardcouponnum | int(11) unsigned | NO | 0 | 奖励优惠券数量 | 
 | awardcoupontype | int(3) unsigned | NO | 0 | 奖励券类型 | 
 | tcremark | varchar(100) | YES |  | 备注 | 
 | uoorderid | bigint(20) unsigned | YES |  | 用户订单号 | 
 | camount | bigint(20) | NO |  | 奖励券金额 | 
 | tcsourcetype | tinyint(3) | NO | 1 |  | 
 | tctransnumber | varchar(64) | NO | 0 | 交易号 | 
 | tcstatus | tinyint(3) | NO |  | 1表示储值成功，2表示预储值 | 
 | tcpaystatus | tinyint(3) | NO | 0 | 订单支付状态 | 
 | uid | bigint(20) unsigned | NO | 1 | 用户id | 
 | statcouponnum | bigint(20) | NO | 0 |  | 
 | statcouponamount | bigint(20) | NO | 0 |  | 
 | statgiftnum | bigint(20) | NO | 0 |  | 
 | statgiftamount | bigint(20) | NO | 0 |  | 
 | tcruleid | varchar(32) | YES |  |  | 
 | tcbizid | varchar(32) | YES |  |  | 
 | tcawardcredit | bigint(20) | NO | 0 | 储值赠送积分 | 
 | isfirst | tinyint(3) | NO | 0 | 是否第一次撤销，1是第一次，0非第一次 | 
cY��#    rchar(100) | YES |  | 活动名称 | 
 | activitytype | varchar(100) | NO |  | 活动类型 | 
 | astarttime | varchar(100) | YES |  | 活动开始时间 | 
 | aendtime | varchar(100) | YES |  | 活动结束时间 | 
 | couponid | bigint(30) | YES |  | 券ID | 
 | couponname | varchar(100) | YES |  | 券名称 | 
 | couponsendsum | bigint(30) | YES | 0 | 券发放数量 | 
 | couponusedsum | bigint(30) | NO | 0 | 券使用数量 | 
 | camount | bigint(30) | YES | 0 | 券抵扣金额 | 
 | tradeamount | bigint(30) | NO | 0 | 交易总金额 | 
 | tradeprepay | bigint(30) | NO | 0 | 交易预存 | 
 | tradecash | bigint(30) | NO | 0 | 交易现金 | 
 | cancelusedsum | bigint(20) | NO | 0 | 撤销使用券数量 | 
 | cancelamount | bigint(20) | NO | 0 | 撤销总金额 | 
 | cancelprepay | bigint(20) | NO | 0 | 撤销预存 | 
 | cancelcash | bigint(20) | YES | 0 | 撤销现金 | 
 | tradepv | bigint(20) | NO | 0 | 带动交易笔数 | 
 | canceltradepv | bigint(20) | NO | 0 | 撤销带动交易pv | 
cY��"    � �. �                                                                                                                                                                  �r�?  E�from_apidprpt_welife_charge_d_detail|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | bigint(20) | NO |  |  | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | NO |  | 门店ID | 
 | tradetime | datetime | NO |  | 交易时间 | 
 | tcid | bigint(20) | NO |  | 流水号   �W�>  ?�Sfrom_apidprpt_welife_activity_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | ftime | int(20) | NO |  | 日期 | 
 | bid | bigint(20) | NO |  | 商户ID | 
 | sid | bigint(20) | YES |  | 门店ID | 
 | aid | bigint(30) | YES |  | 活动ID | 
 | activityname | va  �Y�=  M�Ifrom_apidprpt_wedatas_welife_qrcode_stat|字段|类型|空|默认|注释|
|:----    |:---  �    ----    |:--- |-- -|------      |
 | id | int(20) | NO |  | 自增ID | 
 | ftime | int(10) | NO | 0 | 日期 | 
 | bid | int(20) unsigned | NO | 0 | 商户ID | 
 | qcid | int(20) unsigned | NO | 0 | 渠道ID | 
 | sid | int(20) unsigned | NO | 0 | 门店ID | 
 | qrid | varchar(32) | YES |  | 二维码ID | 
 | new_users | int(10) | NO | 0 | 新增会员 | 
 | all_cancel_users | int(20) unsigned | NO | 0 | 当天总计取消关注会员 | 
 | all_users | int(20) unsigned | NO | 0 | 当天总计关注会员数 | 
 | send_coupon | int(20) unsigned | NO | 0 | 发券数 | 
 | used_coupon | int(20) unsigned | NO | 0 | 用券数量 | 
 | cancel_used_coupon | int(20) unsigned | NO | 0 | 撤销用券数量 | 
 | consum_amount | int(20) unsigned | NO | 0 | 带动消费金额 | 
 | cancel_consum_amount | int(20) unsigned | NO | 0 | 撤销带动消费金额 | 
 | coupon_amount | int(20) unsigned | NO | 0 | 券抵扣金额 | 
 | cancel_coupon_amount | int(20) unsigned | NO | 0 | 撤销券抵扣金额 | 
cY��"              | id | int(20) | NO |  |  | 
 | uid | bigint(20) unsigned | NO |  |  | 
 | bid | bigint(20) unsigned | NO |  |  | 
 | sid | bigint(20) unsigned | NO |  |  | 
 | ucid | varchar(64) | NO |  |  | 
 | username | varchar(50) | YES |  |  | 
 | sex | tinyint(3) | YES |  |  | 
 | regtime | datetime | YES |  |  | 
 | cid | int(10) | YES |  |  | 
 | address | varchar(100) | YES |  |  | 
 | mobile | bigint(15) | YES |  |  | 
 | phone | bigint(20) | YES |  |  | 
 | birthday | date | YES |  |  | 
 | idcardno | bigint(30) | YES |  |  | 
 | email | varchar(100) | YES |  |  | 
 | source | tinyint(3) | YES |  |  | 
 | status | tinyint(3) | YES |  |  | 
 | optype | tinyint(3) | YES |  |  | 
 | optime | datetime | YES |  |  | 
 | qrcode | varchar(100) | YES |  |  | 
 | isfirst | tinyint(3) | YES |  |  | 
 | dCreated | datetime | NO |  |  | 
 | dUpdated | datetime | NO |  |  | 
 | dDeleted | datetime | NO |  |  | 
 | dStatus | tinyint(3) | NO |  |  | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��"    D  � D                                                        �~�<  =�#from_apidprpt_dw_welife_user_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
   �.�;  E�{from_apidprpt_dw_welife_activity_log|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(20) | NO |  |  | 
 | bid | bigint(20) | NO |  |  | 
 | aid | bigint(20) | NO |  |  | 
 | activityname | varchar(100) | YES |  |  | 
 | time | datetime | NO |  |  | 
 | couponid | bigint(20) | NO |  |  | 
 | couponname | varchar(100) | YES |  |  | 
 | couponsum | bigint(20) | NO |  |  | 
 | dCreated | datetime | NO |  |  | 
 | dUpdated | datetime | NO |  |  | 
 | dDeleted | datetime | NO |  |  | 
 | dStatus | tinyint(3) | NO |  |  | 
 | isdeduct | tinyint(3) | YES | 0 | 撤销发送券状态0:发送 1:撤销发送 | 
 | ccid | int(10) unsigned | NO | 0 | 发券日志等级，默认为0 | 
 | UpdateTime | timestamp | NO | CURRENT_TIMESTAMP | 更新时间 | 
cY��"    | 
 | tcrelateid | bigint(20) | NO |  | 撤销流水号 | 
 | uno | varchar(64) | NO |  | 卡号 | 
 | uphone | bigint(20) | NO |  | 手机号 | 
 | amount | bigint(20) | NO |  | 储值总额 | 
 | cash | bigint(20) | NO |  | 储值现金 | 
 | present | bigint(20) | NO |  | 储值赠送 | 
 | pay_type | int(3) | NO |  | 消费支付方式（1.现金 2.银行卡 3.店内微信支付 4.支付宝支付 6.微信支付）  储值支付方式（1.现金支付 2.银行卡支付 3.微信支付 4.支付宝支付 5.店内微信支付 6.手工调账 7.储值卡支付 8.实体卡开卡赠送储值） | 
 | tctype | int(3) | NO |  | 消费类型（2.消费 3.撤销消费 5.过期 8.手工调账减少充值 ） 储值类型（1.充值 6.撤销充值 7.被撤销的充值） | 
 | tcsourcetype | int(3) | NO |  | 消费(1.软POS 2.硬POS 3.OPENAPI接口 4.商城Mall支付 5外卖 6自助买单) 储值(1 软pos 2 硬pos 3 OPENAPI接口  0 默认值历史数据) | 
 | datatype | int(3) | NO |  | 1.消费  2.储值 | 
cY��"   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  � �:  G�]from_apidprpt_dw_qrcode_activity_logs|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | id | int(10) unsigned | NO |  |  | 
 | bid | int(10) unsigned | NO |  | 商家ID | 
 | qrid | varchar(32) | NO |  | 二维码id | 
 | aid | int(10) unsigned | NO |  | 活动id | 
 | qalCreated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | qalUpdated | datetime | NO | 0000-00-00 00:00:00 |  | 
 | qalDeleted | datetime | NO | 0000-00-00 00:00:00 |  | 
 | qalStatus | tinyint(3) unsigned | NO |  |  | 
cY��"     | YES |  |  | 
 | 1dtotalamount | bigint(20) | YES |  |  | 
 | 1dtotalcharge | bigint(20) | YES |  |  | 
 | 1dtotalcash | bigint(20) | YES |  |  | 
 | 1dconsumepv | bigint(20) | YES |  |  | 
 | uno | varchar(64) | YES |  |  | 
 | uname | varchar(40) | YES |  |  | 
 | 1dincome | bigint(20) | YES |  |  | 
 | 1dchargepv | bigint(20) | YES |  | 最近1天储值笔数 | 
 | 3dchargepv | bigint(20) | YES |  |  | 
 | 7dchargepv | bigint(20) | YES |  |  | 
 | 15dchargepv | bigint(20) | YES |  |  | 
 | 30dchargepv | bigint(20) | YES |  |  | 
 | 45dchargepv | bigint(20) | YES |  |  | 
 | 60dchargepv | bigint(20) | YES |  |  | 
 | 90dchargepv | bigint(20) | YES |  |  | 
 | 180dchargepv | bigint(20) | YES |  |  | 
 | 365dchargepv | bigint(20) | YES |  |  | 
 | alltotalamount | bigint(20) | YES |  | 历史消费总金额 | 
 | allconsumepv | bigint(20) | YES |  | 历史消费总笔数 | 
 | allincome | bigint(20) | YES |  | 历史储值总金额 | 
 | allchargepv | bigint(20) | YES |  | 历史储值总笔数 | 
cY��"  �couponid&quot;: &quot;1019223&quot;,
          &quot;name&quot;: &quot;牛奶礼品券&quot;,
          &quot;amount&quot;: &quot;14&quot;,
          &quot;num&quot;: 1,
          &quot;type&quot;: &quot;2&quot;
        }
      ]
    }
  ]
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:----- |:----- |:-----|-----                           |
| id              |  int  |   活动id    |  2000000       |
| name              |  string  |   活动名称    |  消费满1000增券       |
| type              |  int  |   活动类型 1:消费满赠，2:累计金额满赠，4:累计次数满赠    |  1       |
| amount              |  int  |   消费满（或累计满）金额（或次数），金额单位为分。    |  100000       |
| live_time             |  array  |   活动的有效时间段，为一个数组（列表），无时间段限制时，为空数组。    |  [&quot;5:00-9:00&quot;, &quot;11:00-14:00&quot;, &quot;17:00-19:00&quot;]       |
|  �0) | YES |  |  | 
 | 365dtotalcash | bigint(20) | YES |  |  | 
 | 3dconsumepv | bigint(20) | YES |  |  | 
 | 7dconsumepv | bigint(20) | YES |  |  | 
 | 15dconsumepv | bigint(20) | YES |  |  | 
 | 30dconsumepv | bigint(20) | YES |  |  | 
 | 45dconsumepv | bigint(20) | YES |  |  | 
 | 60dconsumepv | bigint(20) | YES |  |  | 
 | 90dconsumepv | bigint(20) | YES |  |  | 
 | 180dconsumepv | bigint(20) | YES |  |  | 
 | 365dconsumepv | bigint(20) | YES |  |  | 
 | lastconsumeday | bigint(20) | YES |  |  | 
 | 3dincome | bigint(20) | YES |  |  | 
 | 7dincome | bigint(20) | YES |  |  | 
 | 15dincome | bigint(20) | YES |  |  | 
 | 30dincome | bigint(20) | YES |  |  | 
 | 45dincome | bigint(20) | YES |  |  | 
 | 60dincome | bigint(20) | YES |  |  | 
 | 90dincome | bigint(20) | YES |  |  | 
 | 180dincome | bigint(20) | YES |  |  | 
 | 365dincome | bigint(20) | YES |  |  | 
 | couponnum | bigint(20) | YES |  |  | 
 | couponmoney | bigint(20) | YES |  |  | 
 | lastsid | bigint(20) | YES |  |  | 
 | openid | varchar(40)  �alamount | bigint(20) | YES |  |  | 
 | 7dtotalcharge | bigint(20) | YES |  |  | 
 | 7dtotalcash | bigint(20) | YES |  |  | 
 | 15dtotalamount | bigint(20) | YES |  |  | 
 | 15dtotalcharge | bigint(20) | YES |  |  | 
 | 15dtotalcash | bigint(20) | YES |  |  | 
 | 30dtotalamount | bigint(20) | YES |  |  | 
 | 30dtotalcharge | bigint(20) | YES |  |  | 
 | 30dtotalcash | bigint(20) | YES |  |  | 
 | 45dtotalamount | bigint(20) | YES |  |  | 
 | 45dtotalcharge | bigint(20) | YES |  |  | 
 | 45dtotalcash | bigint(20) | YES |  |  | 
 | 60dtotalamount | bigint(20) | YES |  |  | 
 | 60dtotalcharge | bigint(20) | YES |  |  | 
 | 60dtotalcash | bigint(20) | YES |  |  | 
 | 90dtotalamount | bigint(20) | YES |  |  | 
 | 90dtotalcharge | bigint(20) | YES |  |  | 
 | 90dtotalcash | bigint(20) | YES |  |  | 
 | 180dtotalamount | bigint(20) | YES |  |  | 
 | 180dtotalcharge | bigint(20) | YES |  |  | 
 | 180dtotalcash | bigint(20) | YES |  |  | 
 | 365dtotalamount | bigint(20) | YES |  |  | 
 | 365dtotalcharge | bigint(2   S S                                                                                                                                                                                                                                                                                                                                         �)�7  M�ifrom_apidprpt_dpdm_welife_trade_consumes|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | uid | bigint(20) | YES |  |  | 
 | bid | bigint(20) | YES |  |  | 
 | sid | bigint(20) | YES |  |  | 
 | tctotalfee | int(20) | YES |  |  | 
 | tcstoredpay | int(20) | YES |  |  | 
 | tcFee | int(20) | YES |  |  | 
 | tctype | int(3) | YES |  |  | 
 | tcmessageverifytime | varchar(50) | YES |  |  | 
 | tchandle | int(10) | YES |  |  | 
 | tcstatus | int(3) | NO |  |  | 
 | tccreated | varchar(50) | YES |  |  | 
 | tcupdated | varchar(50) | YES |  |  | 
 | tcdeleted | varchar(50) | YES |  |  | 
 | tcpaytype | int(3) | YES |  |  | 
cY��"    �  �                                                                                                                  �  �i�9  I�mfrom_apidprpt_dpdm_welife_user_summary|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
 | uid | bigint(20) | YES |  |  | 
 | bid | bigint(20) | YES |  |  | 
 | phone | varchar(20) | YES |  |  | 
 | gender | int(3) | YES |  |  | 
 | birthday | varchar(20) | YES |  |  | 
 | age | int(5) | YES |  |  | 
 | birthday_without_year | varchar(10) | YES |  |  | 
 | source_type | int(3) | YES |  |  | 
 | source_channel | int(20) | YES |  |  | 
 | source_qrid | varchar(30) | YES |  |  | 
 | register_date | varchar(20) | YES |  |  | 
 | charge_saving | int(20) | YES |  |  | 
 | credit_saving | int(20) | YES |  |  | 
 | grade_status | int(10) | YES |  |  | 
 | register_sid | bigint(20) | YES |  |  | 
 | 3dtotalamount | bigint(20) | YES |  |  | 
 | 3dtotalcharge | bigint(20) | YES |  |  | 
 | 3dtotalcash | bigint(20) | YES |  |  | 
 | 7dtot  �  �---  |:---|:----- |-----   |
 | cno | string | 会员卡号 | 字符串 |  是 |
  | shop_id  | int | 门店id | 数字 |  是 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: [
    {
      &quot;id&quot;: &quot;2000000&quot;,
      &quot;name&quot;: &quot;消费满1000增券&quot;,
      &quot;type&quot;: 1,
      &quot;amount&quot;: &quot;100000&quot;,
      &quot;live_time&quot;: [],
      &quot;coupons&quot;: [
        {
          &quot;couponid&quot;: &quot;2000000&quot;,
          &quot;name&quot;: &quot;100元增券100元&quot;,
          &quot;amount&quot;: &quot;100&quot;,
          &quot;num&quot;: 1,
          &quot;type&quot;: &quot;1&quot;
        }
      ]
    },
    {
      &quot;id&quot;: &quot;1018373&quot;,
      &quot;name&quot;: &quot;累计3次送牛奶礼品券&quot;,
      &quot;type&quot;: 4,
      &quot;amount&quot;: &quot;3&quot;,
      &quot;live_time&quot;: [],
      &quot;coupons&quot;: [
        {
          &quot;    ��卡绑定(更换)实体卡，必须验证验证码，需要先调用发送验证码接口

**请求URL：** 
- ` /user/bindcard `
  
**请求方式：**
- POST 

**参数：** 

 | 字段名 |  类型  |  说明  |  格式   | 必传 |
|:----    |:---|:----- |:----- |-----   |
 | cno | string | 绑定用户的卡号 | 字符串 |  是 |
 | acno | string | 实体卡卡号 | 字符串 |  是 |
 | sid | int | 门店id 在哪个门店换的卡 | 数字 |  是 |
 | code | string | 短信验证码 | 字符串 |  否 |

 **返回示例**

``` 
{
  &quot;errcode&quot;: 0,
  &quot;errmsg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;result&quot;: &quot;SUCCESS&quot;
  }
}

```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:----- |:-----|-----                           |
| result        |  string  |   绑卡结果 SUCCESS:成功   FAIL:失败    |  SUCCESS     |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


Y��    msg&quot;: &quot;OK&quot;,
  &quot;res&quot;: {
    &quot;is_exist_phone&quot;: 1,
    &quot;is_exist_card&quot;: 1,
    &quot;is_send_code&quot;: 2,
    &quot;is_send_ok&quot;: &quot;SUCCESS&quot;,
    &quot;acno&quot;:&quot;1685251951205695&quot;
  }
}
```

 **返回参数说明** 

| 字段名             |   类型   |    说明     |         举例 |
|:-----  |:-----  |:----- |-----                           |
| is_exist_phone        |  int  |   手机号是否已开卡 1:未开卡   2:已开卡    |  1       |
| is_exist_card        |  int  |   实体卡是否已使用 1:未使用   2:已使用    |  1       |
| is_send_code        |  int  |   开卡是否需要短信验证  1:需要   2:不需要    |  1       |
| is_send_ok        |  string  |   开卡验证短信是否发生成功   SUCCESS:成功   FAIL:失败  NOT:不需要发送    |  SUCCESS     |
| acno        |  string  |   卡号    |   1685251951205695    |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


Y���