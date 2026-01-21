    @foreach ($faqs as $faq)
        <div class="card mb-3 border-1" id="replacementDiv">
            <div class="row">
                <div class="col-11">
                    <div class="card-body">
                        <p class="font mb-1">{{ $faq->questions }}
                        </p>
                        <div class="content{{ $faq->id }}">
                            <ul class="px-2 mb-1" style="font-size:13px !important;">
                                {!! $faq->answers !!}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex justify-content-end mt-1 font-xl" id="dropdown{{ $faq->id }}">
                    <i class="bi bi-arrow-down-short" style="margin-right: 10px"></i>
                </div>
            </div>
        </div>


        <script>
            document.getElementById('dropdown' + {{ $faq->id }}).addEventListener('click', function() {
                var arrowIcon = this.querySelector('i');
                arrowIcon.classList.toggle('bi-arrow-right-short');
                arrowIcon.classList.toggle('bi-arrow-down-short');
                var content = document.querySelector('.content' + {{ $faq->id }});
                content.style.display = content.style.display === 'none' ? 'block' : 'none';
            });
        </script>
    @endforeach
