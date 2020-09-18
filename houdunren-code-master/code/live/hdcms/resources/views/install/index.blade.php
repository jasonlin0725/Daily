<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>系统安装</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link href="{{asset('org/hdjs/package/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('layouts.hdjs')
</head>
<body class="admin-site">
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-10 m-auto font-weight-light">
            <div class="card bg-light shadow-lg rounded">
                <div class="card-header text-center bg-white">
                    <h3 class="font-weight-lighter p-3">HDCMS</h3>
                </div>
                <div class="card-header bg-light p-0 border-info  shadow-lg">
                    <div class="row">
                        <div class="col-3 border-right text-center p-2 bg-dark text-light">欢迎使用</div>
                        <div class="col-3 border-right text-center p-2 bg-info text-light"
                             style="">配置数据库</div>
                        <div class="col-3 border-right text-center p-2 bg-info text-light">创建数据表</div>
                        <div class="col-3 text-center p-2 bg-info text-light">完成安装</div>
                    </div>
                </div>
                <div class="card-body p-0" style="height: 500px;">
                    <h4 class="text-center m-3 pt-2 text-secondary">许可协议</h4>
                    <div style="overflow-y: auto;text-indent: 2em;" class="h-75 p-4 text-secondary border border">
                        <p>
                            中文版授权协议 适用于中文用户 版权所有 (c) 2010-2019，北京后盾计算机科技有限责任公司保留所有权利。
                        </p>
                        <p>
                            感谢您选择后盾云产品。希望我们的努力能为您提供一个高效快速、强大的站点解决方案。产品网址为 http://www.hdcms.com。
                        </p>
                        <p>
                            用户须知：本协议是您与后盾云公司之间关于您使用后盾云公司提供的各种软件产品及服务的法律协议。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或者限制后盾云责任的免责条款及对您的权利限制。请您审阅并接受或不接受本服务条款。如您不同意本服务条款或后盾云随时对其的修改，您应不使用或主动取消后盾云提供的产品。否则，您的任何对后盾云产品中的相关服务的注册、登陆、下载、查看等使用行为将被视为您对本服务条款全部的完全接受，包括接受后盾云对服务条款随时所做的任何修改。
                        <p>
                            本服务条款一旦发生变更, 后盾云将在网页上公布修改内容。修改后的服务条款一旦在网站管理后台上公布即有效代替原来的服务条款。您可随时登陆后盾云官方论坛查阅最新版服务条款。如果您选择接受本条款，即表示您同意接受协议各项条件的约束。如果您不同意本服务条款，则不能获得使用本服务的权利。您若有违反本条款规定，后盾云公司有权随时中止或终止您对后盾云产品的使用资格并保留追究相关法律责任的权利。
                        </p>
                        <p>  在理解、同意、并遵守本协议的全部条款后，方可开始使用后盾云产品。 后盾云拥有本软件的全部知识产权。本软件只供许可协议，并非出售。后盾云只允许您在遵守本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。
                        </p>
                        <ol style="text-indent: 0">
                        <li>
                            I. 协议许可的权利 您可以在完全遵守本许可协议的基础上，将本软件应用于商业用途，而不必支付软件版权许可费用。 您可以在协议规定的约束和限制范围内修改后盾云产品源代码(如果被提供的话)或界面风格以适应您的网站要求。 您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与使用本软件构建的网站内容的审核、注意义务，确保其不侵犯任何人的合法权益，独立承担因使用后盾云软件和服务带来的全部责任，若造成后盾云公司或用户损失的，您应予以全部赔偿。
                        </li>
                        <li>
                        禁止在后盾云产品的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。 您从应用中心下载的应用程序，未经应用程序开发者/所有者的书面许可，不得对其进行反向工程、反向汇编、反向编译等，不得擅自复制、修改、链接、转载、汇编、发表、出版、发展与之有关的衍生产品、作品等。 如果您未能遵守本协议的条款，您的授权将被终止，所许可的权利将被收回，同时您应承担相应法律责任。
                        </li>
                        <li>    III. 有限担保和免责声明 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。 后盾云公司不对使用本软件构建的网站中或者论坛中的文章或信息承担责任，全部责任由您自行承担。 后盾云公司无法全面监控由第三方上传至应用中心的应用程序，因此不保证应用程序的合法性、安全性、完整性、真实性或品质等；您从应用中心下载应用程序时，同意自行判断并承担所有风险，而不依赖于后盾云公司。但在任何情况下，后盾云公司有权依法停止应用中心服务并采取相应行动，包括但不限于对于相关应用程序进行卸载，暂停服务的全部或部分，保存有关记录，并向有关机关报告。由此对您及第三人可能造成的损失，后盾云公司不承担任何直接、间接或者连带的责任。
                        </li>
                         <li>   后盾云公司对后盾云提供的软件和服务之及时性、安全性、准确性不作担保，由于不可抗力因素、后盾云公司无法控制的因素（包括黑客攻击、停断电等）等造成软件使用和服务中止或终止，而给您造成损失的，您同意放弃追究后盾云公司责任的全部权利。
                         </li>
                        <li>
                             6.后盾云公司特别提请您注意，后盾云公司为了保障公司业务发展和调整的自主权，后盾云公司拥有随时经或未经事先通知而修改服务内容、中止或终止部分或全部软件使用和服务的权利，修改会公布于后盾云公司网站相关页面上，一经公布视为通知。 后盾云公司行使修改或中止、终止部分或全部软件使用和服务的权利而造成损失的，后盾云公司不需对您或任何第三方负责。 有关后盾云产品最终用户授权协议、商业授权与技术服务的详细内容，均由后盾云公司独家提供。
                    </li>
                        后盾云公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权利，修改后的协议或价目表对自改变之日起的新授权用户生效。 一旦您开始安装后盾云产品，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权利的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。 本许可协议条款的解释，效力及纠纷的解决，适用于中华人民共和国大陆法律。
                        <li>
                        后盾云公司拥有对以上各项条款内容的解释权及修改权。
                        </li>
                    </ol>
                        （正文完） 后盾云

                    </div>
                </div>
                <div class="card-footer text-muted text-center shadow">
                    <a class="btn btn-primary" href="{{route('install.database')}}">下一步</a>
                </div>
                <div class="card-footer text-muted text-center shadow p-3">
                    我们的使命：帮助中小企业快速实现互联网价值,增长企业效益!
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>