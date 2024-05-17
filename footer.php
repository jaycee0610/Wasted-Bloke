</div> <!-- Close the container div -->
<div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-default">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Disclaimer 🚨 </h5>
            </div>
            <div class="modal-body">
                This pop-up warning is for informational purposes only and does not constitute financial advice. Always
                conduct your own research and consult with a qualified financial advisor before making investment
                decisions.Before you dive in, consider its impact on societal challenges like poverty, homelessness, and
                alcoholism. While it offers opportunities, it also poses risks, especially for vulnerable communities.
                Prioritize understanding the market, protect against scams, and never invest more than you can afford to
                lose. Stay informed, cautious, and seek advice to invest responsibly.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script type="text/javascript">
    window.onload = () => {
        $('#onload').modal('show');
    }
</script>
<?php wp_footer(); ?>
</body>

</html>