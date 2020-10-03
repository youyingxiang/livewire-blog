<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle"></span>&#8203;

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full"
             role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-center">

                    <div class="mt-3 w-full sm:mt-0 sm:text-center">
                        <h3 class="text-lg text-center leading-6 font-medium text-gray-900" id="modal-headline">
                            第三方授权登陆
                        </h3>
                        <div class="mt-2 flex items-center justify-center">
                            <div class="w-1/2 mx-auto">
                                <a href="{{ route('oauth',['driver'=>'github']) }}">
                                    <svg t="1601712219551" class="icon mx-auto" viewBox="0 0 1024 1024" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" p-id="3279" width="50" height="50">
                                        <path d="M512.96 3.52C230.72 3.52 1.92 232.32 1.92 514.56c0 225.92 146.56 417.28 349.44 485.12 25.6 4.8 34.88-11.2 34.88-24.64 0-12.16-0.32-44.16-0.64-87.04-142.08 31.04-172.16-68.48-172.16-68.48-23.36-59.2-56.64-74.88-56.64-74.88-46.72-31.36 3.2-30.72 3.2-30.72 51.2 3.52 78.4 52.8 78.4 52.8 45.44 78.08 119.68 55.68 148.8 42.56 4.8-32.96 17.92-55.68 32.32-68.48-113.6-12.8-232.96-56.64-232.96-252.48 0-55.68 19.84-101.44 52.48-137.28-5.12-12.8-22.72-64.96 5.12-135.36 0 0 42.88-13.76 140.48 52.48 40.64-11.2 84.48-16.96 128-17.28 43.52 0.32 87.04 5.76 128 17.28 97.6-66.24 140.48-52.48 140.48-52.48 27.84 70.4 10.24 122.24 5.12 135.36 32.64 35.84 52.48 81.28 52.48 137.28 0 196.48-119.36 239.68-233.28 252.16 18.24 15.68 34.56 47.04 34.56 94.72 0 68.48-0.64 123.52-0.64 140.16 0 13.76 9.28 29.44 35.2 24.64C877.76 932.16 1024 740.48 1024 514.88 1024 232.32 795.2 3.52 512.96 3.52z"
                                              fill="#181616" p-id="3280"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="w-1/2 mx-auto">
                                <a href="{{ route('oauth',['driver'=>'qq']) }}">
                                    <svg t="1601712543587" class="icon mx-auto" viewBox="0 0 1024 1024" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" p-id="9210" width="50" height="50">
                                        <path d="M59.813647 591.119059c-38.339765 90.112-44.574118 176.067765-13.793882 192.150588 21.232941 11.053176 54.482824-14.125176 85.62447-60.385882 12.318118 50.386824 42.827294 96.015059 86.40753 132.577882-45.688471 16.835765-75.565176 44.393412-75.565177 75.595294 0 51.260235 80.805647 92.762353 180.525177 92.762353 89.931294 0 164.442353-33.671529 178.176-78.004706h21.473882c13.824 44.303059 88.395294 78.004706 178.266353 78.004706 99.749647 0 180.525176-41.532235 180.525176-92.762353 0-31.141647-29.846588-58.729412-75.565176-75.595294 43.52-36.623059 74.179765-82.191059 86.437647-132.577882 31.111529 46.260706 64.301176 71.439059 85.564235 60.385882 30.780235-16.082824 24.696471-102.098824-13.733647-192.150588-30.117647-70.776471-70.987294-122.940235-102.219294-134.445177a136.432941 136.432941 0 0 0 0.662588-13.613176c0-27.346824-7.589647-52.615529-20.630588-73.246118 0.210824-1.596235 0.210824-3.252706 0.210824-4.848941 0-12.559059-2.981647-24.395294-8.101647-34.575059C826.187294 146.341647 706.168471 0.180706 512 0.180706 317.680941 0.180706 197.632 146.341647 189.831529 330.390588a76.649412 76.649412 0 0 0-8.161882 34.575059c0 1.596235 0.120471 3.252706 0.180706 4.848941a137.908706 137.908706 0 0 0-20.510118 73.246118c0 4.547765 0.150588 9.095529 0.542118 13.613176-31.021176 11.504941-72.011294 63.759059-102.068706 134.445177z"
                                              fill="#333333" p-id="9211"></path>
                                    </svg>
                                </a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <span class="flex w-20 rounded-md shadow-sm sm:mt-0 mx-auto sm:mr-0 sm:w-auto">
          <button type="button" @click="show_login = false"
                  class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              取消
          </button>
        </span>
            </div>
        </div>
    </div>
</div>
