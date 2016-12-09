<!DOCTYPE HTML>
<html>
  <head>
    <?php echo $this->fetch('html_header.htm'); ?>
    <script>
      <?php if ($this->_var['step'] == 1): ?>
      function validate()
        {
          var error = '';
          var email = document.forms['theForm'].email.value;
          var username = document.forms['theForm'].username.value;
          if(typeof(email) != 'undefined' && $.trim(email) == '')
          {
              error += '邮箱不能为空\n';
          }
          if(typeof(username) != 'undefined' && $.trim(username) == '')
          {
              error += '用户名不能为空\n';
          }
          
          if(error.length > 0)
          {
            $.zalert.add(error);
            return false;
          }
          else
          {
            return true;
          }
        }
      <?php elseif ($this->_var['step'] == 3): ?>
      function validate()
        {
          var error = '';
          var password = document.forms['theForm'].password.value;
          if(typeof(password) != 'undefined' && $.trim(password) == '')
          {
              error += '密码不能为空\n';
          }
          
          if(error.length > 0)
          {
            $.zalert.add(error);
            return false;
          }
          else
          {
            return true;
          }
        }
      <?php endif; ?>
    </script>
  </head>
  <body>
    <?php echo $this->fetch('page_header.htm'); ?>
    <section>
      <?php if ($this->_var['step'] == 1): ?>
      <form method="post" action="user.php" name='theForm' onsubmit="return validate();">
        <div class="login_dl">
        <table cellspacing="0" align="center" width="100%">
          <tr>
            <td><div class="login_div"><label class="label_input1"></label><input type="text" name="username" class="text_input text_input1" placeholder="请输入用户名"/></div></td>
          </tr>
          <tr>
            <td><div class="login_div"><label class="label_input4"></label><input type="text" name="email" class="text_input text_input4" placeholder="请输入邮箱"/></div></td>
          </tr>
          <tr>
            <td align="center"><input type="submit" value="确&nbsp;定" class="button2" /></td>
          </tr>
        </table>
        <input type="hidden" name="act" value="get_password" />
        <input type='hidden' name='step' value='2'/>
        </div>
      </form>
      <?php elseif ($this->_var['step'] == 3): ?>
      <form method="post" action="user.php" name='theForm' onsubmit="return validate();">
        <table cellspacing="0" align="center" width="100%" class="login_dl">
          <tr>
            <td colspan='2'><input type="password" name="password" class="text_input text_input1" placeholder="请输入新密码"/></td>
          </tr>
          <tr>
            <td align="left" width='50%'><a class="button3" href=''>返&nbsp;回&nbsp;首&nbsp;页</a></td>
            <td align="right" width='50%'><input type="submit" value="确&nbsp;定" class="button3 right" /></td>
          </tr>
        </table>
        <input type='hidden' name='adminid' value='<?php echo $this->_var['adminid']; ?>'/>
        <input type='hidden' name='code' value='<?php echo $this->_var['code']; ?>'/>
        <input type="hidden" name="act" value="get_password" />
        <input type='hidden' name='step' value='4'/>
      </form>
      <?php endif; ?>
    </section>
  </body>
</html>