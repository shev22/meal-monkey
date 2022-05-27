
<button type="button" class="btn btn-info">
   </i> <a href="{{'/cart'}}">Shopping-Cart [{{ count((array) session('cart')) }}]</a>
</button>


   

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="{{'/'}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('categories')}}">Categories</a>
                    </li>
                    <li>
                        <a href="{{url('food')}}">Catalog</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="{{url('admin')}}">Admin</a>
                    </li>
                </ul>
            </div>

            
            