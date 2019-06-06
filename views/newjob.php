<?php if (!isLoggedIn()): ?>
    <div class="alert alert-danger">
        <h1>User In not Logged In</h1>
    </div>
<?php endif; ?>
<?php if (isLoggedIn()): ?>

<div class="container">
    <form method="post" action="/submit-newjob" class="form-horizontal" role="form">
        <h2>დაამატეთ ვაკანსია</h2>
        <div class="form-group">
            <label class="col-sm-3 control-label">Saxeli</label>
            <div class="col-sm-9">
                <input name="cname" class="form-control" placeholder="დასახელება" type="text">
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Company</label>
            <div class="col-sm-9">
                <input name="company" class="form-control" placeholder="კომპანიის სახელი" type="text">
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Kategoria</label>
            <div class="col-sm-9">
                <select  class="form-control" name="category">

                    <option selected="selected"value="adminstracia/menejmenti">ადმინისტრაცია/მენეჯმენტი</option>
                    <option value="გაყიდვები">გაყიდვები</option>
                    <option value="ფინანსები">ფინანსები</option>
                    <option value="მარკეტინგი">მარკეტინგი</option>
                    <option value="ლოჯისტიკა">ლოჯისტიკა</option>
                    <option value="IT">IT</option>
                    <option value="იურიდიული">იურიდიული</option>
                    <option value="სამედიცინო">სამედიცინო</option>
                    <option value="სხვა">სხვა</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">ქალაქი</label>
            <div class="col-sm-9">
                <select  class="form-control" name="city">
                    <option selected="selected" value="თბილისი">თბილისი</option>
                    <option value="ყვარელი">ყვარელი</option>
                    <option value="თელავი">თელავი</option>
                    <option value="გურჯაანი">გურჯაანი</option>
                    <option value="ბათუმი">ბათუმი</option>
                    <option value="ქუთაისი">ქუთაისი</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 control-label">სამუშაო დრო</label>
            <div class="col-sm-9">

                <select  class="form-control" name="ganakveti">
                    <option selected="selected" value="სრული">სრული</option>
                    <option value="ნახევარი">ნახევარი</option>
                    <option value="ღამის ცვლა">ღამის ცვლა</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 control-label">მოთხოვნები</label>
            <div class="col-sm-9">
               <textarea rows="7" cols="110" name="pirobebi">

               </textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block"> დაამატეთ სამუშაო  </button>
    </form>
</div>
<?php endif; ?>