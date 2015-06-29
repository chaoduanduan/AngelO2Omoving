<?php
//--------- 阿凡达网站管理系统”信息提示”语言包（后台）

$message_r=array
(
	'EmptyUsername'=>'请输入用户名与密码',
	'NotRepassword'=>'两次输入的密码不一致',
	'EmptyEAnswer'=>'没有填写安全回答',
	'ReUsername'=>'此用户名已存在，请重输一个',
	'AddUserSuccess'=>'增加用户成功',
	'EnterUsername'=>'请输入用户名',
	'EditUserSuccess'=>'修改用户成功',
	'NotDelUserid'=>'请选择要删除的用户',
	'LastUserNotToDel'=>'已经是唯一的管理帐号，不能删除',
	'DelUserSuccess'=>'删除用户成功',
	'NotNewsLevel'=>'您无权操作此信息栏目',
	'NotLevel'=>'您无权操作此功能',
	'NotLogin'=>'您还未登录',
	'SingleUser'=>'同一帐号同时只能一个在线，或是您的帐号已被禁用',
	'LoginTime'=>'登录超时',
	'EmptyKey'=>'请输入用户名、密码与验证码',
	'FailKey'=>'验证码不正确',
	'OutKeytime'=>'验证码已过期',
	'ErrorLoginAuth'=>'认证码错误',
	'EmptyLoginCert'=>'请用安全证书登录后台',
	'ErrorLoginCert'=>'安全证书错误',
	'LoginOutNum'=>'系统限制的登录次数不得超过 '.$public_r[loginnum].' 次,请等 '.$public_r[logintime].' 分钟过后,方可重新登录',
	'LoginFail'=>'您的用户名、密码或安全答案有误，也可能您的帐号已被禁用，请重输',
	'LoginSuccess'=>'登录成功',
	'NotCookie'=>'您的Cookie没有开启，不能登录成功',
	'EmptyOldPassword'=>'请输入旧密码',
	'EmptyNewPassword'=>'新密码不能为空',
	'OldPasswordFail'=>'旧密码有误',
	'LessPassword'=>'密码不能少于6位',
	'EditPasswordSuccess'=>'修改资料成功',
	'EditPasswordSuccessLogin'=>'修改资料成功,改变操作界面需重新登陆',
	'NotDelLogid'=>'请选择要删除的日志',
	'DelLogSuccess'=>'删除日志成功',
	'EmptyDelLogTime'=>'请选择起始时间及结束时间',
	'ExitSuccess'=>'退出登录成功',
	'EmptyGroupname'=>'请输入用户组名称',
	'AddGroupSuccess'=>'增加用户组成功',
	'EditGroupSuccess'=>'修改用户组成功',
	'NotDelGroupid'=>'请选择要删除的用户组',
	'DelGroupSuccess'=>'删除用户组成功',
	'NotAddInfoLevel'=>'您没有增加信息的权限',
	'NotEditInfoLevel'=>'您没有编辑信息的权限',
	'NotCheckInfoLevel'=>'您没有审核信息的权限',
	'NotGoodInfoLevel'=>'您没有更改信息属性的权限',
	'NotEditCheckInfoLevel'=>'您不可以修改已审核过的信息',
	'NotDocInfoLevel'=>'您没有归档信息的权限',
	'NotMoveInfoLevel'=>'您没有移动/复制信息的权限',
	'NotDelInfoLevel'=>'您没有删除信息的权限',
	'EmptyUserClass'=>'请输入部门名称',
	'AddUserClassSuccess'=>'增加部门成功',
	'EditUserClassSuccess'=>'修改部门成功',
	'NotDelUserClassid'=>'请选择要删除的部门',
	'DelUserClassSuccess'=>'删除部门成功',
	'HaveDoCertkey'=>'此用户已绑定过证书',
	'NoDoCertkey'=>'此用户还未绑定过证书',
	'CloseCertkeySuccess'=>'已取消证书绑定',

	'DbError'=>'数据库出错',
	'ErrorUrl'=>'您来自的链接不存在',
	'FailHash'=>'非法来源',
	'MustEnter'=>'带*项的为必填',
	'ErrorMail'=>'Email地址有误',
	'VarMessage'=>$GLOBALS['varmessage'],

	'EmptyZt'=>'请输入专题名、存放目录及选择列表模板',
	'ReZtpath'=>'该专题目录已存在，请重填',
	'AddZtSuccess'=>'增加专题成功',
	'EditZtSuccess'=>'修改专题成功',
	'NotDelZtid'=>'请选择要删除的专题',
	'DelZtSuccess'=>'删除专题成功',
	'EmptyZtType'=>'请输入分类名称',
	'AddZtTypeSuccess'=>'增加专题子类成功',
	'EditZtTypeSuccess'=>'修改专题子类成功',
	'EmptyZtTypeId'=>'请选择要删除的子类',
	'DelZtTypeSuccess'=>'删除专题子类成功',
	'EmptyZtInfoZid'=>'请选择专题信息',
	'DelZtInfoSuccess'=>'移除专题信息成功',
	'EmptyMoveZtInfoCid'=>'请选择目标专题子类',
	'MoveZtInfoSuccess'=>'转移专题信息成功',
	'GoodZtInfoSuccess'=>'推荐/取消推荐专题信息成功',
	'EditZtInfoTimeSuccess'=>'批量修改专题信息发布时间成功',
	'EmptyClass'=>'请输入栏目名、存放目录及系统模型',
	'LastMustChange'=>'终级栏目必须选择列表模板及内容模板',
	'ReClasspath'=>'您输入的目录名已存在。请重填',
	'BclassNotLast'=>'父栏目不能是终极栏目',
	'AddClassSuccess'=>'增加栏目成功',
	'AddLastClassSuccess'=>'增加终级栏目成功',
	'CreatePathFail'=>'建立目录不成功!请检查目录权限',
	'BclassIsself'=>'您选择的大栏目跟本栏目是同一对象，请重新选择大栏目',
	'BclassIssmall'=>'您选择的隶属的大栏目是栏目本身的子栏目。请重新选择大栏目',
	'ClassChangeModHaveInfo'=>'此栏目还有信息数据，不能更换系统模型',
	'EditClassSuccess'=>'修改栏目成功',
	'NotDelClassid'=>'请选择要删除的栏目',
	'DelLastClassSuccess'=>'删除终级栏目成功',
	'DelClassSuccess'=>'删除栏目成功',
	'EditClassOrderSuccess'=>'修改栏目顺序成功',
	'ChangeSonclassSuccess'=>'栏目关系转换完毕',
	'EmptyZtclassClassname'=>'请输入专题分类名',
	'AddZtclassClassSuccess'=>'增加专题分类成功',
	'EditZtclassClassSuccess'=>'修改专题分类成功',
	'NotChangeZtclassClassid'=>'请选择要删除的专题分类',
	'DelZtclassClassSuccess'=>'删除专题分类成功',
	'NotChangeIslastClassid'=>'请选择要操作的栏目',
	'NotChangeWbClassid'=>'外部栏目不能转换',
	'LastTheClassHaveSonclass'=>'被设置的栏目不能有子栏目',
	'ChangeClassToLastSuccess'=>'设置为终极栏目成功',
	'LastTheClassHaveInfo'=>'此栏目还有多余信息数据，请先删除或转移数据',
	'ChangeClassToNolastSuccess'=>'设置为非终极栏目成功',
	'NotChangeSetClass'=>'请选择要设置的栏目',
	'NotChangeSetClassInfo'=>'无可设置的项目',
	'SetMoreClassSuccess'=>'批量设置栏目成功',
	'EditZtOrderSuccess'=>'设置专题顺序成功',
	'SaveTogZtInfoSuccess'=>'保存专题组合参数完毕',
	'EmptySaveTogZtname'=>'保存参数名不能为空',
	'EmptyDelTogztid'=>'请选择要删除的专题组合参数',
	'DelTogZtInfoSuccess'=>'删除专题组合参数成功',
	'EmptyWbClass'=>'请输入栏目名及外部链接',
	'BclassNotWb'=>'父栏目不能为外部栏目',
	'SetClassInfoTypeSuccess'=>'设置栏目标题分类成功',
	'SetClassStatsSuccess'=>'设置栏目访问统计参数成功',

	'EmptyTitle'=>'请输入信息标题和选择内容模板',
	'AddNewsSuccess'=>'增加信息成功',
	'EditNewsSuccess'=>'修改信息成功',
	'NotDelNewsid'=>'请选择要删除的信息',
	'DelNewsSuccess'=>'删除信息成功',
	'DelNewsAllSuccess'=>'批量删除信息成功',
	'NotClassid'=>'此栏目不存在',
	'NotTopNewsid'=>'请选择要置顶的信息',
	'TopNewsSuccess'=>'信息置顶成功',
	'NotCheckNewsid'=>'请选择要审核的信息',
	'CheckNewsSuccess'=>'信息审核成功',
	'NotNoCheckNewsid'=>'请选择要取消审核的信息',
	'NoCheckNewsSuccess'=>'取消审核成功',
	'EmptyMoveClassid'=>'请选择移动的目标栏目或移动的目标栏目不能是大栏目',
	'NotMoveNewsid'=>'请选择要移动的信息',
	'MoveNewsSuccess'=>'移动信息成功',
	'EmptyCopyClassid'=>'请选择复制的目标栏目或复制的目标栏目不能是大栏目',
	'NotCopyNewsid'=>'请选择要复制的信息',
	'CopyNewsSuccess'=>'复制信息成功',
	'EmptyMovetoClassid'=>'请选择原栏目与目标栏目',
	'MovetoClassidMustLastid'=>'原栏目与目标类别必须是终极栏目',
	'MoveClassidsame'=>'原栏目与目标栏目是同一对象，操作不成功',
	'MoveClassNewsSuccess'=>'批量转移栏目信息成功',
	'DefModid'=>'两个栏目系统模型不相同',
	'NotDoCheckUserLevel'=>'您没有签发权限',
	'EmptyDoWfInfo'=>'请选择操作',
	'DoWfInfoOver'=>'此信息已处理完成',
	'HaveDoWfInfo'=>'此信息已处理过了',
	'DoWfInfoCkSuccess'=>'处理完毕(通过)',
	'DoWfInfoTbSuccess'=>'处理完毕(返工)',
	'DoWfInfoTdSuccess'=>'处理完毕(否决)',
	'EmptyChecktext'=>'请输入评语',
	'ReInfoTitle'=>'标题重复,增加不成功!',
	'NotDoSelfinfo'=>'您所在的用户组只能编辑自己的信息',
	'EmptyGoodInfoId'=>'请选择要推荐或取消推荐的信息',
	'GoodInfoSuccess'=>'推荐/取消推荐信息成功',
	'EmptyFirsttitleInfoId'=>'请选择要设置头条或取消头条的信息',
	'FirsttitleInfoSuccess'=>'设置头条或取消头条成功',
	'EmptyReListHtmlMoreId'=>'请至少选择一个栏目/专题/分类',
	'DelListEnewsSuccess'=>'删除栏目缓存文件成功',
	'EmptySearchOnclick'=>'搜索次数不能为0',
	'EmptySearchId'=>'请选择要删除的搜索关键字',
	'DelSearchKeySuccess'=>'删除搜索关键字成功',
	'EmptyTogZt'=>'组合专题参数不完整',
	'TogZtSuccess'=>'组合专题完毕',
	'ChangeInfoLinkSuccess'=>'批量更新相关链接成功',
	'EmptyDocClass'=>'请选择归档的栏目',
	'EmptyDocTimeClass'=>'此栏目没有设置归档时间',
	'OneInfoToDocSuccess'=>'一组信息归档完毕,正进入下一组......',
	'InfoToDocSuccess'=>'归档完毕',
	'EmptyDocInfo'=>'请选择归档的信息',
	'EmptyDocTb'=>'请选择数据表',
	'EmptyDoctime'=>'请输入归档时间',
	'EmptyDocDay'=>'请输入归档时间',
	'EmptyDocId'=>'请输入归档ID',
	'AddInfoErrorClassid'=>'增加信息的栏目必须为终极栏目',
	'HaveNotReInfo'=>'没有重复的信息',
	'HaveNotInfo'=>'此信息不存在',
	'ClearBreakInfoSuccess'=>'清理多余信息成功 (清理数量：'.$GLOBALS['cbinfoaffnum'].')',
	'ResetAddDataNumSuccess'=>'重置统计数成功',
	'EmptyMoreInfoTime'=>'没有可修改的信息',
	'EditMoreInfoTimeSuccess'=>'批量修改发布时间成功',
	'UpdateInfoPlnumSuccess'=>'更新信息评论数成功',

	'NotDelPlid'=>'请选择要删除的评论',
	'DelPlSuccess'=>'删除信息评论成功',
	'NotCheckPlid'=>'请选择要审核的评论',
	'CheckPlSuccess'=>'审核评论成功',
	'NotGoodPlid'=>'请选择评论',
	'DoGoodPlSuccess'=>'推荐/取消推荐评论成功',
	'EmptyPlface'=>'请输入表情符号及表情文件',
	'HavePlface'=>'此表情符号已存在',
	'AddPlfaceSuccess'=>'增加表情成功',
	'EditPlfaceSuccess'=>'修改表情成功',
	'EmptyPlDataTable'=>'请输入表名',
	'RePlDataTable'=>'表已存在',
	'AddPlDataTableSuccess'=>'增加评论分表成功',
	'NotChangePlDataTable'=>'请选择分表',
	'DefPlDataTableSuccess'=>'默认存放分表成功',
	'NotDelDefPlDataTable'=>'默认分表不能删除',
	'DelPlDataTableSuccess'=>'删除评论分表成功',
	'EmptyDelMorePl'=>'请设置批量删除评论选项',
	'SetPlSuccess'=>'评论设置参数成功',
	
	'EmptyTempname'=>'请输入模板名与内容',
	'AddBqTempSuccess'=>'增加标签模板成功',
	'EditBqtempSuccess'=>'修改标签模板成功',
	'NotDelTemplateid'=>'请选择您要删除的模板',
	'NotDelDefaultTemp'=>'默认模板不能删除',
	'DelBqtempSuccess'=>'删除标签模板成功',
	'AddNewsTempSuccess'=>'增加信息内容模板成功',
	'EditNewsTempSuccess'=>'修改信息内容模板成功',
	'DelNewsTempSuccess'=>'删除信息内容模板成功',
	'EmptyIndexTemp'=>'请输入首页模板内容',
	'EditPublicTempSuccess'=>'修改公共模板成功',
	'EmptyListTempname'=>'请输入列表模板名与内容',
	'AddListTempSuccess'=>'增加列表模板成功',
	'EditListTempSuccess'=>'修改列表模板成功',
	'DelListTempSuccess'=>'删除列表模板成功',
	'NotChangeTemp'=>'您还没选择模板',
	'DefaultTempSuccess'=>'设为默认模板成功',
	'EmptyTemptext'=>'请输入模板内容',
	'EmptyPltempName'=>'请输入模板名称和内容',
	'AddPltempSuccess'=>'增加评论模板成功',
	'EditPltempSuccess'=>'修改评论模板成功',
	'NotChangePlTempid'=>'请选择评论模板',
	'NotDelDefPlTempid'=>'默认评论模板不能删除',
	'DelPltempSuccess'=>'删除评论模板成功',
	'DefPltempSuccess'=>'默认评论模板成功',
	'EditCptempSuccess'=>'修改控制面板模板成功',
	'EmptyBqname'=>'请输入标签名称，标签函数名与标签符号',
	'AddBqSuccess'=>'增加标签成功',
	'ReBq'=>'此标签符号已重复，请重写',
	'EditBqSuccess'=>'修改标签成功',
	'NotDelBqid'=>'请选择要删除的标签',
	'NotDelSysBq'=>'此标签为系统标签，无法删除',
	'DelBqSuccess'=>'删除标签成功',
	'EmptySearchTemp'=>'请输入模板内容',
	'EditSearchTempSuccess'=>'修改搜索模板成功',
	'EmptyOtherLinkTemp'=>'请输入模板内容',
	'EditOtherLinkTempSuccess'=>'修改相关链接/JS模板成功',
	'EmptyPrintTemp'=>'请输入模板名称和内容',
	'AddPrintTempSuccess'=>'增加打印模板成功',
	'EditPrintTempSuccess'=>'修改打印模板成功',
	'NotChangePrintTempid'=>'请选择打印模板',
	'NotDelDefPrintTempid'=>'默认打印模板不能删除',
	'DelPrintTempSuccess'=>'删除打印模板成功',
	'DefPrintTempSuccess'=>'默认打印模板成功',
	'EmptyEditDownTemp'=>'请输入模板内容',
	'EditDownTempSuccess'=>'修改模板成功',
	'EmptyTempvar'=>'请输入模板变量名，变量标识与变量值',
	'AddTempvarSuccess'=>'增加模板变量成功',
	'EditTempvarSuccess'=>'修改模板变量成功',
	'NotDelTempvarid'=>'请选择要删除的模板变量',
	'DelTempvarSuccess'=>'删除模板变量成功',
	'LoadClassTempSuccess'=>'导入栏目模板成功',
	'EmptChangeListtempid'=>'请选择列表模板',
	'ChangeClassListtempSuccess'=>'批量更换栏目列表模板成功',
	'EmptySearchTempname'=>'请输入搜索模板名与模板内容',
	'AddMSearchTempSuccess'=>'增加搜索模板成功',
	'EditMSearchTempSuccess'=>'修改搜索模板成功',
	'DelMSearchTempSuccess'=>'删除搜索模板成功',
	'DefaultMSearchtempSuccess'=>'设为默认模板成功',
	'EmptyDefaultSearchtempid'=>'请选择模板',
	'EmptyRepTemp'=>'请输入被替换的字符',
	'RepTempSuccess'=>'模板字符替换完毕',
	'EmptyJstempname'=>'请输入模板名称与模板内容',
	'AddJstempSuccess'=>'增加JS模板成功',
	'EditJstempSuccess'=>'修改JS模板成功',
	'EmptyJstempid'=>'请选择要操作的JS模板',
	'DelJstempSuccess'=>'删除JS模板成功',
	'DefaultJstempSuccess'=>'默认JS模板成功',
	'EmptyAdminStyle'=>'请输入目录名与样式名称',
	'AddAdminStyleSuccess'=>'新增后台样式成功',
	'EditAdminStyleSuccess'=>'修改后台样式成功',
	'EmptyAdminStyleid'=>'请选择的后台样式',
	'NotDelDefAdminStyle'=>'默认后台样式不能删除',
	'DelAdminStyleSuccess'=>'删除后台样式成功',
	'DefAdminStyleSuccess'=>'默认后台样式完毕',
	'EmptyAdminStylePath'=>'样式目录不存在',
	'EmptyLoadBqid'=>'请选择要导出的标签与函数内容',
	'NotThisBqid'=>'此标签不存在',
	'DelLoadBqFileSuccess'=>'删除标签临时文件成功',
	'EmptyLoadInBqFile'=>'请选择要导入的标签文件',
	'LoadInBqMustBq'=>'标签文件扩展名必须为.bq',
	'ReLoadInBq'=>'已标签/函数已存在',
	'EmptyVoteTempname'=>'请输入模板名称与模板内容',
	'AddVoteTempSuccess'=>'增加投票模板成功',
	'EditVoteTempSuccess'=>'修改投票模板成功',
	'DelVoteTempSuccess'=>'删除投票模板成功',
	'NotChangeVoteTempid'=>'请选择要删除的模板',
	'EditTempGroupSuccess'=>'修改模板组成功',
	'EmptyTempGroup'=>'请选择模板组',
	'DefTempGroupSuccess'=>'默认模板组成功',
	'EmptyDelTempGroup'=>'请选择要删除的模板组',
	'NotDelDefTempGroup'=>'默认模板组不能删除',
	'DelTempGroupSuccess'=>'删除模板组成功',
	'EmptyLoadTempGroup'=>'请选择导出的模板组',
	'LoadTempGroupSuccess'=>'导出模板成功',
	'EmptyLoadInTempGroup'=>'请选择要导入的模板组文件',
	'LoadInTempGroupMusttemp'=>'导入的文件扩展名必须为.temp',
	'LoadInTempGroupSuccess'=>'导入模板组完毕',
	'EditGbooktempSuccess'=>'修改留言板模板成功',
	'EditLoginIframeSuccess'=>'修改登录状态模板成功',
	'EmptyClasstempname'=>'请输入模板名称与模板内容',
	'AddClasstempSuccess'=>'增加封面模板成功',
	'EditClasstempSuccess'=>'修改封面模板成功',
	'EmptyClasstempid'=>'请选择要操作的封面模板',
	'DelClasstempSuccess'=>'删除封面模板成功',
	'EditLoginJstempSuccess'=>'修改JS调用登录状态模板成功',
	'NotBakTemp'=>'没有备份记录',
	'EmptyPagetempname'=>'请输入模板名称与模板内容',
	'AddPagetempSuccess'=>'增加自定义页面模板成功',
	'EditPagetempSuccess'=>'修改自定义页面模板成功',
	'EmptyPagetempid'=>'请选择要删除的自定义页面模板',
	'DelPagetempSuccess'=>'删除自定义页面模板成功',
	'EmptyIndexpageName'=>'请输入方案名称和内容',
	'AddIndexpageSuccess'=>'增加首页方案成功',
	'EditIndexpageSuccess'=>'修改首页方案成功',
	'NotChangeIndexpageid'=>'没有选择首页方案',
	'DelIndexpageSuccess'=>'删除首页方案成功',
	'DefIndexpageSuccess'=>'启用首页方案成功',
	'NoDefIndexpageSuccess'=>'取消首页方案成功',
	'EditDttempSuccess'=>'修改动态页面模板成功',

	'EmptySpClassname'=>'请输入碎片分类名称',
	'AddSpClassSuccess'=>'增加分类成功',
	'EditSpClassSuccess'=>'修改分类成功',
	'NotDelSpClassid'=>'请选择要删除的分类',
	'DelSpClassSuccess'=>'删除分类成功',
	'EmptySp'=>'请输入碎片名和变量名',
	'HaveSp'=>'此碎片变量名已经存在',
	'AddSpSuccess'=>'增加碎片成功',
	'EditSpSuccess'=>'修改碎片成功',
	'NotDelSpid'=>'请选择要删除的碎片',
	'DelSpSuccess'=>'删除碎片成功',
	'EmptyReSpid'=>'请选择碎片',
	'ReSpSuccess'=>'刷新碎片文件成功',
	'ReSpAllSuccess'=>'批量刷新碎片文件成功',
	'AddSpInfoSuccess'=>'增加碎片信息成功',
	'EditSpInfoSuccess'=>'修改碎片信息成功',
	'DelSpInfoSuccess'=>'删除碎片信息成功',
	'NotRecord'=>'没有记录',
	'NotChangeSpInfo'=>'请选择信息',
	'NotChangeSp'=>'请选择碎片',
	'HaveSpInfo'=>'此碎片信息已经存在',
	'EmptySpInfoTime'=>'没有可修改的信息',
	'EditSpInfoTimeSuccess'=>'批量修改碎片信息时间成功',
	'LoadInSpInfoSuccess'=>'批量导入碎片信息成功',
	
	'SetPublicSuccess'=>'参数设置成功',
	'SetRewriteSuccess'=>'伪静态参数设置成功',
	'FtpHostFail'=>'FTP服务器无法连接',
	'FtpUserFail'=>'FTP帐号或密码错误',
	'FtpPathFail'=>'FTP目录错误',
	'FtpConnectSuccess'=>'设置正确，FTP服务器可以连接上',
	'AddPicNewsSuccess'=>'增加图片信息成功',
	'EditPicNewsSuccess'=>'修改图片信息成功',
	'NotDelPicnewsid'=>'请选择要删除的图片',
	'DelPicNewsSuccess'=>'删除图片信息成功',
	'EmptyAd'=>'请选择广告类别ID，广告名称和广告类别',
	'AddAdSuccess'=>'增加广告成功',
	'EditAdSuccess'=>'修改广告成功',
	'NotDelAdid'=>'请选择要删除的广告',
	'DelAdSuccess'=>'删除广告成功',
	'EmptyBefrom'=>'请输入来源名与链接地址',
	'AddBefromSuccess'=>'增加信息来源成功',
	'EditBefromSuccess'=>'修改信息来源成功',
	'NotDelBefromid'=>'请选择要删除的信息来源',
	'DelBefromSuccess'=>'删除信息来源成功',
	'EmptyKeyname'=>'请输入关键字与链接地址',
	'AddKeySuccess'=>'增加关键字成功',
	'EditKeySuccess'=>'修改关键字成功',
	'NotDelKeyid'=>'请选择要删除的关键字',
	'DelKeySuccess'=>'删除关键字成功',
	'EmptyKeyClass'=>'请输入分类名称',
	'AddKeyClassSuccess'=>'增加内容关键字分类成功',
	'EditKeyClassSuccess'=>'修改内容关键字分类成功',
	'NotKeyClassid'=>'请选择要删除的分类',
	'DelKeyClassSuccess'=>'删除内容关键字分类成功',
	'EmptyWord'=>'请输入过滤字符',
	'AddWordSuccess'=>'增加过滤字符成功',
	'EditWordSuccess'=>'修改过滤字符成功',
	'NotDelWordid'=>'请选择要删除的过滤字符',
	'DelWordSuccess'=>'删除过滤字符成功',
	'EmptyVotenum'=>'请至少输入一个投票项目',
	'EmptyVoteTitle'=>'请输入投票标题',
	'AddVoteSuccess'=>'增加投票成功',
	'EditVoteSuccess'=>'修改投票成功',
	'NotDelVoteid'=>'请选择要删除的投票',
	'DelVoteSuccess'=>'删除投票成功',
	'EmptyPicNewsClass'=>'请输入类别名称',
	'AddPicNewsClassSuccess'=>'增加图片信息分类成功',
	'EditPicNewsClassSuccess'=>'修改图片信息分类成功',
	'NotPicNewsClassid'=>'请选择要删除的类别',
	'DelPicNewsClassSuccess'=>'删除图片信息分类成功',
	'badpath'=>'目录名称含有特殊字符,验证不通过',
	'NotFun'=>'此函数不存在．增加标签不成功',
	'NotPageFun'=>'您输入的列表分页/内容分页函数不存在',
	'ChangeDataSuccess'=>'更新缓存成功',
	'NotPostData'=>'请至少选择一个发布任务',
	'PostDataSuccess'=>'远程发布完毕',
	'EmptyAdClassname'=>'请输入广告类别名',
	'AddAdClassSuccess'=>'增加广告类别成功',
	'EditAdClassSuccess'=>'修改广告类别成功',
	'NotChangeAdClassid'=>'请选择要删除的广告类别',
	'DelAdClassSuccess'=>'删除广告类别成功',
	'EmptyWriter'=>'请输入作者名',
	'AddWriterSuccess'=>'增加作者成功',
	'EditWriterSuccess'=>'修改作者成功',
	'NotDelWid'=>'请选择要删除的作者',
	'DelWriterSuccess'=>'删除作者成功',
	'EmptyLname'=>'请输入站点名称与地址',
	'AddLinkSuccess'=>'增加友情链接成功',
	'EditLinkSuccess'=>'修改友情链接成功',
	'EmptyLid'=>'请选择要删除的友情链接',
	'DelLinkSuccess'=>'删除友情链接成功',
	'EmptyDownurl'=>'请输入地址前缀名称与地址',
	'AddDownurlSuccess'=>'增加地址前缀成功',
	'EditDownurlSuccess'=>'修改地址前缀成功',
	'NotChangeDownurlid'=>'请选择要删除的url地址',
	'DelDownurlSuccess'=>'删除地址前缀成功',
	'EmptyPayname'=>'请输入名称',
	'AddPayfsSuccess'=>'增加方式成功',
	'EditPayfsSuccess'=>'修改方式成功',
	'EmptyPayfsid'=>'请选择要操作的方式',
	'DelPayfsSuccess'=>'删除方式成功',
	'DefPayfsSuccess'=>'默认方式成功',
	'NotSetDdid'=>'请至少选择一个要设置的订单',
	'SetHavepriceSuccess'=>'设置订单付款状态成功',
	'SetOutProductSuccess'=>'设置订单发货状态成功',
	'SetCheckedSuccess'=>'设置订单状态成功',
	'DelDdSuccess'=>'删除订单成功',
	'CutMaxnumSuccess'=>'设置库存成功',
	'SetShopSysSuccess'=>'商城参数设置成功',
	'DdRetextSuccess'=>'更新后台商城订单备注成功',
	'EmptyPrecode'=>'请填写优惠码名称、优惠码与优惠价格',
	'RePrecode'=>'此优惠码已增加过了',
	'AddPrecodeSuccess'=>'增加优惠码成功',
	'EmptyMorePrecode'=>'请填写增加数量、优惠码与优惠价格',
	'AddMorePrecodeSuccess'=>'批量增加优惠码成功',
	'EditPrecodeSuccess'=>'修改优惠码成功',
	'NotChangePrecodeid'=>'请选择要删除的优惠码',
	'DelPrecodeSuccess'=>'删除优惠码成功',
	'DdEditPretotalSuccess'=>'修改订单优惠金额成功',
	'EmptyGbookClass'=>'请输入分类名称',
	'AddGbookClassSuccess'=>'增加分类成功',
	'EditGbookClassSuccess'=>'修改分类成功',
	'DelGbookClassSuccess'=>'删除分类成功',
	'NotChangeGbookClassid'=>'请选择要删除的分类',
	'EmptyDelErrorid'=>'请选择要删除的错误报告',
	'DelErrorSuccess'=>'删除错误报告成功',
	'EmptyNotcjWord'=>'防采集字符不能为空',
	'AddNotcjSuccess'=>'增加防采集字符成功',
	'EditNotcjSuccess'=>'修改防采集字符成功',
	'EmptyDelNotcjid'=>'请选择要删除的防采集字符',
	'DelNotcjSuccess'=>'删除防采集字符成功',
	'EmptyRepDownLevel'=>'带*为必填',
	'RepDownLevelSuccess'=>'批量替换地址权限完毕',
	'EmptyLinkclassClassname'=>'请输入友情链接分类名',
	'AddLinkclassClassSuccess'=>'增加友情链接分类成功',
	'EditLinkclassClassSuccess'=>'修改友情链接分类成功',
	'NotChangeLinkclassClassid'=>'请选择要删除的友情链接分类',
	'DelLinkclassClassSuccess'=>'删除友情链接分类成功',
	'EmptyTaskname'=>'请输出计划任务名称与文件名',
	'AddTaskSuccess'=>'增加计划任务成功',
	'EditTaskSuccess'=>'修改计划任务成功',
	'DelTaskSuccess'=>'删除计划任务成功',
	'EmptyDelTaskId'=>'请选择要删除的计划任务',
	'ErrorTaskFilename'=>'文件名有误',
	'TodoTaskSuccess'=>'执行任务完毕',
	'EmptyPlayerName'=>'请输入播放器名称与播放文件',
	'AddPlayerSuccess'=>'增加播放器成功',
	'PlayerFileNotExist'=>'文件不存在',
	'EditPlayerSuccess'=>'修改播放器成功',
	'NotDelPlayerID'=>'请选择要删除的播放器',
	'DelPlayerSuccess'=>'删除播放器成功',
	'EmptySearchLoadTb'=>'带*项的为必填，不能为空',
	'ReSearchLoadTb'=>'此导入表已存在',
	'AddSearchLoadTbSuccess'=>'增加搜索数据源成功',
	'EditSearchLoadTbSuccess'=>'修改搜索数据源成功',
	'NotDelSearchLoadTbid'=>'请选择要删除的搜索数据源',
	'DelSearchLoadTbSuccess'=>'删除搜索数据源成功',
	'SearchallDelDataSuccess'=>'批量删除数据源数据成功',
	'SetSearchAllSuccess'=>'全站搜索设置成功',
	'ClearSearchAllSuccess'=>'清理多余数据完毕',
	'EditSchallTempSuccess'=>'修改全站搜索模板成功',
	'ClearTmpFileDataSuccess'=>'清空临时文件与数据完毕',

	'ReIndexSuccess'=>'刷新首页成功',
	'NotChangeReClassid'=>'请选择要刷新的信息栏目',
	'ReClassidSuccess'=>'刷新信息列表成功',
	'NotChangeReZtid'=>'请选择要刷新的信息专题',
	'ReZtidSuccess'=>'刷新信息列表成功',
	'NotChangeReTtid'=>'请选择要刷新的标题分类',
	'ReTtidSuccess'=>'刷新信息列表成功',
	'ReTtidAllSuccess'=>'刷新所有标题分类页面成功',
	'ReClassidAllSuccess'=>'刷新所有信息列表成功',
	'ReNewsidAllSuccess'=>'刷新所有信息页面成功',
	'ReZtidAllSuccess'=>'刷新所有专题页面成功',
	'ReNewHotSuccess'=>'刷新最新信息、推荐与热门信息成功',
	'ReAllJsSuccess'=>'刷新所有排行js成功',
	'ReJsSuccess'=>'刷新排行成功',
	'EmptyDoname'=>'请输入任务名',
	'AddDoSuccess'=>'增加刷新任务成功',
	'EditDoSuccess'=>'修改刷新任务成功',
	'DelDoSuccess'=>'删除刷新任务成功',
	'EmptyDoid'=>'请选择要删除的任务',
	'ReDo'=>'此任务已存在',
	'ReClassPathSuccess'=>'恢复栏目目录成功',
	'ReVoteJsSuccess'=>'批量生成投票JS成功',
	'ReAdJsSuccess'=>'批量生成广告JS成功',
	'ReDtPageSuccess'=>'批量更新动态页面完毕',
	'AddInfoToReHtmlSuccess'=>'刷新页面成功',
	'NotReInfoid'=>'请选择要刷新的信息',
	'ReSingleInfoSuccess'=>'刷新页面成功',
	'UpdateClassInfosAllSuccess'=>'更新栏目信息数成功',
	'ReInfoUrlSuccess'=>'批量更新信息页地址成功',

	'TranFail'=>'请查看目录权限是否为0777,文件上传不成功',
	'EmptyFileno'=>'请输入文件编号。这方便附件管理',
	'EmptyHttp'=>'请输入远程保存地址',
	'EmptyTranFile'=>'请选择要上传的文件',
	'TranPHP'=>'请不要上传.php文件',
	'TranFiletypeFail'=>'您上传的类型有误，系统不接受',
	'TranFilesizeFail'=>'系统限制的最大文件大小为 '.$public_r['filesize'].' KB',
	'NotTranImg'=>'您上传的不是图片文件,请重新选择',
	'NotTranFlash'=>'您上传的不是.swf文件,请重新选择',
	'TranHttpFail'=>'远程保存不成功或文件是已上传的文件！',
	'InTranRecordFail'=>'记录上传记录出错',
	'NotFileid'=>'请选择要删除的文件',
	'DelFileSuccess'=>'删除文件成功',
	'DelFileAllSuccess'=>'批量删除文件成功',
	'MustChangeTranOneFile'=>'请至少上传一个文件',
	'TranMoreFileSuccess'=>'批量上传附件成功',
	'EmptyDopicFileid'=>'请选择要操作的图片',
	'DoMarkSmallPicSuccess'=>'操作图片成功',
	'DelFreeFileSuccess'=>'清理失效附件完毕',
	'NotCropImage'=>'图片不存在',
	'CropImageFiletypeFail'=>'图片类型不正确',
	'CropImageFilesizeFail'=>'图片尺寸太小，无法处理',
	'EmptyFileDataTable'=>'请输入表名',
	'ReFileDataTable'=>'表已存在',
	'AddFileDataTableSuccess'=>'增加附件分表成功',
	'NotChangeFileDataTable'=>'请选择分表',
	'DefFileDataTableSuccess'=>'默认存放分表成功',
	'NotDelDefFileDataTable'=>'默认分表不能删除',
	'DelFileDataTableSuccess'=>'删除附件分表成功',
	
	'EmptyMemberGroupname'=>'请输入会员组名称与会员级别不能为0',
	'AddMemberGroupSuccess'=>'增加会员组成功',
	'EditMemberGroupSuccess'=>'修改会员组成功',
	'NotDelMemberGroupid'=>'请选择要删除的会员组',
	'DelMemberGroupSuccess'=>'删除会员组成功',
	'EmptyMember'=>'请输入会员名，密码，邮箱与会员组',
	'AddMemberSuccess'=>'增加会员成功',
	'EmptyEmail'=>'邮箱不能为空',
	'EditMemberSuccess'=>'修改用户资料成功',
	'NotDelMemberid'=>'请选择要删除的会员',
	'DelMemberSuccess'=>'删除会员成功',
	'EmptyClearMember'=>'请设置清理会员选项',
	'EmptyCard'=>'带*的为必填',
	'ReCard'=>'此点卡已存在',
	'EditCardSuccess'=>'修改点卡成功!',
	'AddCardSuccess'=>'增加点卡成功!',
	'DelCardSuccess'=>'删除点卡成功!',
	'NotChangeCardid'=>'请选择你要删除的点卡',
	'DelDownRecordSuccess'=>'删除下载记录成功',
	'EmptyDownTime'=>'请输入截止时间',
	'EmptyGetFen'=>'请输入要增加的点数',
	'GetFenSuccess'=>'批量增加点数成功',
	'EmptyMoreCard'=>'请输入增加点卡数、帐号位数、密码位数与金额',
	'AddMoreCardSuccess'=>'批量增加点卡成功',
	'EmptyDelMoreMsg'=>'请输入起始与结束时间',
	'DelMoreMsgSuccess'=>'批量删除短消息成功',
	'EmptySendMsg'=>'请输入标题与内容',
	'SendMsgSuccess'=>'发送站内消息成功',
	'EmptySendMemberGroup'=>'请选择要发送的会员组',
	'SendEmailSuccess'=>'邮件发送完毕',
	'EmptyMemberForm'=>'请输入表单名称',
	'AddMemberFormSuccess'=>'增加会员表单成功',
	'EditMemberFormSuccess'=>'修改会员表单成功',
	'DelMemberFormSuccess'=>'删除会员表单成功',
	'EmptyMemberFormId'=>'请选择要删除的会员表单',
	'AddSpaceStyleSuccess'=>'增加会员空间模板成功',
	'EmptySpaceStyle'=>'请输入模板名称与目录',
	'EditSpaceStyleSuccess'=>'修改会员空间模板成功',
	'EmptySpaceStyleid'=>'请选择要删除的模板',
	'DelSpaceStyleSuccess'=>'删除会员空间模板成功',
	'EmptySpaceStylePath'=>'模板目录不存在',
	'EmptyDefSpaceStyleid'=>'请选择要默认的模板',
	'DefSpaceStyleSuccess'=>'默认模板成功',
	'NotDelDefSpaceStyle'=>'默认模板不能删除',
	'NotChangeDoCheckMember'=>'请选择要审核的会员',
	'DoCheckMemberSuccess'=>'会员审核成功',
	'EmptyBuyGroup'=>'请输入类型名称与购买金额',
	'AddBuyGroupSuccess'=>'增加充值类型成功',
	'EditBuyGroupSuccess'=>'修改充值类型成功',
	'DelBuyGroupSuccess'=>'删除充值类型成功',
	'EmptyBuyGroupid'=>'请选择要删除的充值类型',
	'EmptyMemberConnect'=>'请输入接口名称',
	'EditMemberConnectSuccess'=>'配置外部登录接口成功',

	'NotChangeCjid'=>'请选择要采集的节点',
	'EmptyInfourl'=>'请至少输入一个采集页面地址',
	'NotCjid'=>'此节点不是采集节点',
	'FailCjUrl'=>'请确认采集页面存在，系统无法取得信息',
	'EmptyCjSmallUrl'=>'链接地址区域块没有任何记录',
	'FailCX'=>'传递参数有误',
	'EmptyCjTitle'=>'请输入标题',
	'EditCjNewsSuccess'=>'修改采集信息成功',
	'NotDelCjNewsid'=>'请选择要删除的采集信息',
	'DelCjNewsSuccess'=>'删除采集信息成功',
	'DelCjNewsAllSuccess'=>'批量删除采集信息成功',
	'NotCjNewsIn'=>'您还没有选择要入库的采集信息',
	'CjLoadDbSuccess'=>'入库完毕。',
	'EmptyInfoTitleSuccess'=>'请输入节点名称',
	'CjClassidMustLast'=>'采集栏目必须为终极栏目（蓝色条）',
	'AddInfoClassSuccess'=>'增加采集节点成功',
	'OldInfoidNotSingle'=>'原节点跟父节点不能一样',
	'EditInfoClassSuccess'=>'修改采集节点成功',
	'NotDelInfoid'=>'请选择要删除的节点',
	'DelInfoClassSuccess'=>'删除采集节点成功',
	'EmptyViewInfoClass'=>'请选择要预览的节点',
	'NotEmptyCjClassid'=>'请选择要清空的采集节点',
	'EmptyCjSuccess'=>'清空采集记录成功',
	'LoadOutCjEmptyClassid'=>'请选择要导出规则的采集节点',
	'LoadOutCjMustNewsclassid'=>'请选择可入库的采集节点',
	'EmptyLoadInCjFile'=>'请选择入库栏目与上传文件',
	'LoadInCjMustLastClass'=>'入库栏目必须选择终极栏目',
	'LoadInCjErrorfiletype'=>'上传的文件扩展名必须为.cj',
	'LoadInCjSuccess'=>'导入采集规则成功',
	
	'EmptyF'=>'请输入字段名与字段名称',
	'ReF'=>'字段名已重复，请重新输入',
	'ReTxtF'=>'数据表已有存文本字段',
	'RePageF'=>'数据表已有存分页字段',
	'AddFSuccess'=>'增加数据库字段成功',
	'NotIsAdd'=>'这是系统内部字段，不能修改/删除',
	'EditFSuccess'=>'修改数据库字段成功',
	'EmptyFid'=>'请选择要删除的字段',
	'DelFSuccess'=>'删除数据库字段成功',
	'EditFOrderSuccess'=>'修改字段排序成功',
	'ChangeDataTableFSuccess'=>'字段转移成功',
	'EmptyM'=>'请输入模型名称与输入表单模板',
	'AddMSuccess'=>'增加模型成功',
	'EditMSuccess'=>'修改模型成功',
	'EmptyMid'=>'请选择要删除的模型',
	'DelMSuccess'=>'删除模型成功',
	'EmptyDefMid'=>'请选择模型',
	'DefMSuccess'=>'设置默认模型成功',
	'EmptyLoadMod'=>'请选择要导出的模型',
	'DoRepNewstextSuccess'=>'批量替换信息成功',
	'NotRepNewstextTb'=>'没有可替换的数据表',
	'CopyTbSuccess'=>'复制数据表完毕',
	'EmptyTbname'=>'请输入表名与表标识',
	'ReTbname'=>'表名已重复!',
	'AddTbSuccess'=>'建立数据表成功',
	'EditTbSuccess'=>'修改数据表成功',
	'NotChangeTb'=>'请选择要删除的数据表',
	'NotDelDefaultTb'=>'默认数据表不能删除',
	'DelTbSuccess'=>'删除数据表成功',
	'NotChangeDefaultTb'=>'请选择数据表',
	'DefaultTableSuccess'=>'默认数据表成功',
	'EmptyDoSqlQuery'=>'请输入要执行的SQL语句',
	'DoExecSqlSuccess'=>'SQL语句执行完毕',
	'EmptyMustF'=>'字段 '.$GLOBALS['msgmustf'].' 的值为空，请将必填项填写完整',
	'ReIsOnlyF'=>'字段 '.$GLOBALS['msgisonlyf'].' 的值已存在，请不要重复提交',
	'EmptyLoadInMod'=>'请选择要导入的模型与存放的表名',
	'LoadInModMustmod'=>'导入的文件扩展名必须为.mod',
	'HaveLoadInTb'=>'表名已存在',
	'LoadInModSuccess'=>'导入模型成功',
	'EmptySqltext'=>'请输入SQL名称与SQL语句',
	'AddSqlSuccess'=>'增加SQL语句成功',
	'EditSqlSuccess'=>'修改SQL语句成功',
	'DelSqlSuccess'=>'删除SQL语句成功',
	'EmptySqlid'=>'请选择要删除的SQL语句',
	'EmptyExecSqlid'=>'请选择要执行的SQL语句',
	'ChangeAllModFormSuccess'=>'批量更新模型表单成功',
	'EmptyDataTable'=>'请输入表名',
	'ReDataTable'=>'表已存在',
	'AddDataTableSuccess'=>'增加副表分表成功',
	'NotChangeDataTable'=>'请选择分表',
	'DefDataTableSuccess'=>'默认存放分表成功',
	'NotDelDefDataTable'=>'默认分表不能删除',
	'DelDataTableSuccess'=>'删除副表分表成功',
	'EmptyYhname'=>'请输入方案名称',
	'AddYhSuccess'=>'增加优化方案成功',
	'EditYhSuccess'=>'修改优化方案成功',
	'NotChangeYhid'=>'请选择要删除的方案',
	'DelYhSuccess'=>'删除优化方案成功',
	
	'MustChangeOneTable'=>'请至少选择一个表',
	'RepireTableSuccess'=>'修复表成功',
	'OptimTableSuccess'=>'优化表成功',
	'MustChangeOneDelTable'=>'请至少选择一个要删除的表',
	'DelTableSuccess'=>'删除数据表成功',
	'ChangeDropDb'=>'请选择要删除的数据库',
	'DropDbSuccess'=>'删除数据库成功',
	'EmptyDbname'=>'请输入要建立的数据库名',
	'AddDbSuccess'=>'建立数据库成功',
	'EmptyTableSuccess'=>'清空表成功',
	'NotChangeDbname'=>'您还没选择数据库',
	'FileSizeEmpty'=>'文件大小或记录数不能为空',
	'BakDbSuccess'=>'恭喜您！备份完毕．',
	'EmptyDbnamePath'=>'请输入恢复目录与选择数据库',
	'DbPathNotExist'=>'您输入的目录不存在',
	'BakCsError'=>'备份参数有误',
	'NotChangeDelPath'=>'请选择要删除的目录',
	'ThisPathNotExist'=>'此目录不存在，操作不成功',
	'DelPathSuccess'=>'删除目录成功',
	'FileNotExist'=>'文件不存在',
	'DelZipFileSuccess'=>'删除压缩包成功',
	'ReTableDataSuccess'=>'恭喜您！数据还原完毕．',
	'NotChangeBakTable'=>'您还没选择要备份的数据库',
	'NotBakDbPath'=>'此备份目录不存在，请重输',
	'NotbakZipPath'=>'此压缩目录不存在，请重输',

	'EmptyReGbooktext'=>'请输入回复内容',
	'ReGbookSuccess'=>'回复留言成功',
	'NotChangeLyid'=>'请选择要删除的留言',
	'DelGbookSuccess'=>'删除留言成功',
	'EmptyDelMoreGbook'=>'请设置批量删除留言选项',
	'NotChangeFeedbackid'=>'请选择要删除的反馈',
	'DelFeedbackSuccess'=>'删除反馈信息成功',
	'NotChangeCheckLyid'=>'请选择要审核的留言',
	'CheckLysuccess'=>'审核留言成功',
	'ReMFeedbackFileSuccess'=>'批量更新反馈表单成功',
	'NotDelMemberGbookid'=>'请选择要删除的留言',
	'DelMemberGbookSuccess'=>'删除留言成功',
	'NotDelMemberFeedbackid'=>'请选择要删除的反馈',
	'DelMemberFeedbackSuccess'=>'删除反馈成功',
	
	'EmptyUserpagePath'=>'请输入页面名称与文件路径',
	'AddUserpageSuccess'=>'增加自定义页面成功',
	'EditUserpageSuccess'=>'修改自定义页面成功',
	'EmptyDelUserpageid'=>'请选择要删除的自定义页面',
	'NotDelUserpageid'=>'此页面不存在',
	'DelUserpageSuccess'=>'删除自定义页面成功',
	'ReUserpageAllSuccess'=>'批量刷新自定义页面成功',
	'EmptyReUserpageid'=>'请选择要刷新的自定义页面',
	'DoReUserpageSuccess'=>'刷新自定义页面成功',
	'EmptyUserJsname'=>'请输入完整信息',
	'JsSqlError'=>'SQL语句参数有误',
	'AddUserjsSuccess'=>'增加自定义JS成功',
	'EditUserjsSuccess'=>'修改自定义JS成功',
	'NotChangeUserjsid'=>'请选择要删除的自定义JS',
	'DelUserjsSuccess'=>'删除自定义JS成功',
	'ReUserjsAllSuccess'=>'刷新所有用户自定义JS成功',
	'EmptyReUserjsid'=>'请选择要刷新的自定义JS',
	'DoReUserjsSuccess'=>'刷新自定义JS成功',
	'EmptyUserListname'=>'请输入完整信息',
	'ListSqlError'=>'SQL语句参数有误',
	'AddUserlistSuccess'=>'增加自定义信息列表成功',
	'EditUserlistSuccess'=>'修改自定义信息列表成功',
	'NotChangeUserlistid'=>'请选择要删除的自定义信息列表',
	'DelUserlistSuccess'=>'删除自定义信息列表成功',
	'ReUserlistAllSuccess'=>'刷新所有自定义信息列表成功',
	'EmptyReUserlistid'=>'请选择要刷新的自定义列表',
	'DoReUserlistSuccess'=>'刷新自定义列表成功',
	'EmptyTagid'=>'请选择TAGS',
	'DelTagsSuccess'=>'删除TAGS成功',
	'EmptyTagname'=>'请输入TAGS名称',
	'HaveTagname'=>'此TAGS已经存在',
	'NotMergeTagname'=>'目标TAGS不存在',
	'MergeTagsSuccess'=>'合并TAGS成功',
	'AddTagsSuccess'=>'增加TAGS成功',
	'EditTagsSuccess'=>'修改TAGS成功',
	'GoodTagsSuccess'=>'推荐/取消推荐TAGS成功',
	'DelLessTagsSuccess'=>'删除TAGS成功',
	'EmptyLessTags'=>'没有符合的记录',
	'EmptyTagsTime'=>'请输入时间',
	'DelOldTagsInfoSuccess'=>'删除成功',
	'SetTagsSuccess'=>'设置成功',
	'ClearTagsSuccess'=>'清理多余数据完毕',
	'EmptyMenuClass'=>'请输入分类名称',
	'AddMenuClassSuccess'=>'增加分类成功',
	'EditMenuClassSuccess'=>'修改分类成功',
	'EmptyMenu'=>'请输入菜单名称和地址',
	'AddMenuSuccess'=>'增加菜单成功',
	'EditMenuSuccess'=>'修改菜单成功',

	'EmptyTempvarClassname'=>'请输入模板变量分类名',
	'AddTempvarClassSuccess'=>'增加模板变量分类成功',
	'EditTempvarClassSuccess'=>'修改模板变量分类成功',
	'NotChangeTempvarClassid'=>'请选择要删除的模板变量分类',
	'DelTempvarClassSuccess'=>'删除模板变量分类成功',
	'EmptyPageClassname'=>'请输入自定义页面分类名',
	'AddPageClassSuccess'=>'增加自定义页面分类成功',
	'EditPageClassSuccess'=>'修改自定义页面分类成功',
	'NotChangePageClassid'=>'请选择要删除的自定义页面分类',
	'DelPageClassSuccess'=>'删除自定义页面分类成功',
	'EmptyBqtempClassname'=>'请输入标签模板分类名',
	'AddBqtempClassSuccess'=>'增加标签模板分类成功',
	'EditBqtempClassSuccess'=>'修改标签模板分类成功',
	'NotChangeBqtempClassid'=>'请选择要删除的标签模板分类',
	'DelBqtempClassSuccess'=>'删除标签模板分类成功',
	'EmptyListtempClassname'=>'请输入列表模板分类名',
	'AddListtempClassSuccess'=>'增加列表模板分类成功',
	'EditListtempClassSuccess'=>'修改列表模板分类成功',
	'NotChangeListtempClassid'=>'请选择要删除的列表模板分类',
	'DelListtempClassSuccess'=>'删除列表模板分类成功',
	'EmptyNewstempClassname'=>'请输入内容模板分类名',
	'AddNewstempClassSuccess'=>'增加内容模板分类成功',
	'EditNewstempClassSuccess'=>'修改内容模板分类成功',
	'NotChangeNewstempClassid'=>'请选择要删除的内容模板分类',
	'DelNewstempClassSuccess'=>'删除内容模板分类成功',
	'EmptySearchtempClassname'=>'请输入搜索模板分类名',
	'AddSearchtempClassSuccess'=>'增加搜索模板分类成功',
	'EditSearchtempClassSuccess'=>'修改搜索模板分类成功',
	'NotChangeSearchtempClassid'=>'请选择要删除的搜索模板分类',
	'DelSearchtempClassSuccess'=>'删除搜索模板分类成功',
	'EmptyBqClassname'=>'请输入标签分类名',
	'AddBqClassSuccess'=>'增加标签分类成功',
	'EditBqClassSuccess'=>'修改标签分类成功',
	'NotChangeBqClassid'=>'请选择要删除的标签分类',
	'DelBqClassSuccess'=>'删除标签分类成功',
	'EmptyJstempClassname'=>'请输入JS模板分类名',
	'AddJstempClassSuccess'=>'增加JS模板分类成功',
	'EditJstempClassSuccess'=>'修改JS模板分类成功',
	'NotChangeJstempClassid'=>'请选择要删除的JS模板分类',
	'DelJstempClassSuccess'=>'删除JS模板分类成功',
	'EmptyClasstempClassname'=>'请输入封面模板分类名',
	'AddClasstempClassSuccess'=>'增加封面模板分类成功',
	'EditClasstempClassSuccess'=>'修改封面模板分类成功',
	'NotChangeClasstempClassid'=>'请选择要删除的封面模板分类',
	'DelClasstempClassSuccess'=>'删除封面模板分类成功',
	'EmptyErrorClassname'=>'请输入错误报告分类名',
	'AddErrorClassSuccess'=>'增加错误报告分类成功',
	'EditErrorClassSuccess'=>'修改错误报告分类成功',
	'NotChangeErrorClassid'=>'请选择要删除的错误报告分类',
	'DelErrorClassSuccess'=>'删除错误报告分类成功',
	'EmptyInfoTypeName'=>'请输入分类名称、存放目录及选择系统模型、列表模板',
	'ReInfoTypePath'=>'该分类目录已存在，请重填',
	'AddInfoTypeSuccess'=>'增加标题分类成功',
	'EditInfoTypeSuccess'=>'修改标题分类成功',
	'EditInfoTypeOrderSuccess'=>'修改标题分类排序成功',
	'NotDelInfoTypeid'=>'请选择要删除的标题分类',
	'DelInfoTypeSuccess'=>'删除标题分类成功',
	'EmptyTagsClassname'=>'请输入TAGS分类名',
	'AddTagsClassSuccess'=>'增加TAGS分类成功',
	'EditTagsClassSuccess'=>'修改TAGS分类成功',
	'NotChangeTagsClassid'=>'请选择要删除的TAGS分类',
	'DelTagsClassSuccess'=>'删除TAGS分类成功',
	'EmptyUserlistClassname'=>'请输入分类名',
	'AddUserlistClassSuccess'=>'增加分类成功',
	'EditUserlistClassSuccess'=>'修改分类成功',
	'NotChangeUserlistClassid'=>'请选择要删除的分类',
	'DelUserlistClassSuccess'=>'删除分类成功',
	'EmptyUserjsClassname'=>'请输入分类名',
	'AddUserjsClassSuccess'=>'增加分类成功',
	'EditUserjsClassSuccess'=>'修改分类成功',
	'NotChangeUserjsClassid'=>'请选择要删除的分类',
	'DelUserjsClassSuccess'=>'删除分类成功',
	
	'EmptyWapStyle'=>'请输入模板名称跟模板目录',
	'EmptyWapStylePath'=>'模板目录不存在',
	'AddWapStyleSuccess'=>'增加WAP模板成功',
	'EditWapStyleSuccess'=>'修改WAP模板成功',
	'EmptyWapStyleid'=>'请选择要删除的模板',
	'NotDelDefWapStyle'=>'默认模板不能删除',
	'DelWapStyleSuccess'=>'删除WAP模板成功',
	'SetWapSuccess'=>'设置WAP完毕',

	'NotDelPayRecordid'=>'请选择要删除的记录',
	'DelPayRecordSuccess'=>'删除支付记录成功',
	'EmptyPayApi'=>'请输入接口名称',
	'EditPayApiSuccess'=>'设置接口完毕',
	'EmptySetPayFen'=>'点数不能设置为0',
	'SetPayFenSuccess'=>'支付参数设置完毕',

	'SetFirewallSuccess'=>'防火墙设置完毕',
	'SetFirewallSuccessLogin'=>'防火墙设置完毕,防火墙参数变更需重新登陆',
	'SetSafeSuccess'=>'设置完毕',
	'SetSafeSuccessLogin'=>'设置完毕,安全参数变更需重新登陆',
	'EmptyPubVarClass'=>'请输入分类名',
	'AddPubVarClassSuccess'=>'增加变量分类成功',
	'EditPubVarClassSuccess'=>'修改变量分类成功',
	'NotDelPubVarClassid'=>'请选择要删除的变量分类',
	'DelPubVarClassSuccess'=>'删除变量分类成功',
	'EmptyPubVar'=>'请输入变量名，变量标识',
	'RePubVar'=>'此变量名已存在，不能重复添加',
	'AddPubVarSuccess'=>'增加扩展变量成功',
	'EditPubVarSuccess'=>'修改扩展变量成功',
	'NotDelPubVarid'=>'请选择要删除的变量',
	'DelPubVarSuccess'=>'删除扩展变量成功',

	'EmptyWorkflow'=>'请输入工作流名称',
	'AddWorkflowSuccess'=>'增加工作流成功',
	'EditWorkflowSuccess'=>'修改工作流成功',
	'NotDelWorkflowid'=>'请选择要删除的工作流',
	'DelWorkflowSuccess'=>'删除工作流成功',
	'EmptyWorkflowItem'=>'请输入节点名称和节点编号',
	'HaveWorkflowItem'=>'此节点编号已存在',
	'EmptyWorkflowItemUser'=>'没有设置接收对象',
	'AddWorkflowItemSuccess'=>'增加节点成功',
	'EditWorkflowItemSuccess'=>'修改节点成功',
	'NotDelWorkflowItemid'=>'请选择要删除的节点',
	'DelWorkflowItemSuccess'=>'删除节点成功',
	'EditWorkflowItemSuccess'=>'修改节点编号成功',

	'EmptyPostServer'=>'请输入发布服务器名称',
	'AddPostServerSuccess'=>'增加发布服务器成功',
	'EditPostServerSuccess'=>'修改发布服务器成功',
	'NotDelPostServerid'=>'请选择要删除的发布服务器',
	'DelPostServerSuccess'=>'删除发布服务器成功',

	'EmptyMoreport'=>'请把带*项填写完整',
	'ErrorMoreportPath'=>'访问端目录不存在',
	'AddMoreportSuccess'=>'增加访问端成功',
	'EditMoreportSuccess'=>'修改访问端成功',
	'NotChangeMoreportId'=>'请选择要删除的访问端',
	'DelMoreportSuccess'=>'删除访问端成功',
	'NotMainMoreport'=>'请在主访问端管理',
	'MoreportChangeAllDataSuccess'=>'所有访问端数据更新成功',
);

?>