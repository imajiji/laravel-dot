<div class="container">
    <form method="POST" action="https://select.epark.jp/api/user_deal/change_status_of_point">
        {{ csrf_field() }}

        <div class="form-group">
            <label>plan_id</label>
            <input type="text" class="form-control" name="plan_id">
        </div>
        <div class="form-group">
            <label>epark_id</label>
            <input type="text" class="form-control" name="epark_id">
        </div>
        <div class="form-group">
            <label>coupon_code</label>
            <input type="text" class="form-control" name="coupon_code">
        </div>
        <div class="form-group">
            <label>coupon_status</label>
            <input type="text" class="form-control" name="coupon_status">
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">送信</button>
            </div>
        </div>
    </form>
</div>