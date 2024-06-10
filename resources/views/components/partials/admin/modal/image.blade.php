<div id="modal-image" class="hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500/50"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <img src="" alt="Image" class="max-h-[50vh] mx-auto items-center">
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" id="close-modal-image"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const modalImage = document.getElementById('modal-image');
    const closeModalImage = document.getElementById('close-modal-image');

    document.querySelectorAll('.modal-image').forEach((image) => {
        image.addEventListener('click', () => {
            modalImage.classList.remove('hidden');
            modalImage.querySelector('img').src = image.src;
        });
    });

    closeModalImage.addEventListener('click', () => {
        modalImage.classList.add('hidden');
    });
</script>
