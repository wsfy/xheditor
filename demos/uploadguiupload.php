<script type="text/javascript">
var url;

//���������������̣�����ݾ�����Ŀ���ѡ������һ����ɾ������һ��

//�ǿ�������
url='test2.zip';//�ǿ�������ֱ�Ӵ���JSON����
callbackDelay();
function callbackDelay(){
	if(window.callback)callback(url);
	else setTimeout(callbackDelay,1);
}
//��������
/*
url='"test.zip"';//����ֻ�ܴ���JSON��ʽ���ַ���
callback(url);
function callback(v){
	window.name=escape(v);
	window.location='http://<?php echo $_POST['editorhost'];?>/xheditorproxy.html';//����ļ������һ��0�ֽ��ļ�������޴��ļ�Ҳ����������
}
*/
</script>