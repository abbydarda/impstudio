# API IMPStudio

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis felis cursus libero pretium sollicitudin et vel sapien.

## Sample Config

1. Tambah value *FAKER_LOCALE* di .env

	```
	FAKER_LOCALE="id_ID"

	```

## Installation
1. jalankan perintah `composer install` di terminal
	```bash
	composer install
	```
2. Jalankan perintah `php artisan serve` di terminal
	```bash
	php artisan serve
	```

## API Endpoint
1. ### Create Token 
	Endpoint ini untuk membuat token, yang nantinya digunakan sebagai headers `Authorization`
	##### Endpoint : [POST] /tokens/create
	#####  Response 
	```json
	{
		"token":  "2|B81IlmUvNcItRA6kAPODGHyZ6uE3j5zwjDlqb68w"
	}
	```

2. ### Merchants 
    Semua API untuk me-*manage* merchant
    1. #### **ALL Merchant**
        ##### Endpoint : [GET] /api/merchant
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        #####  Response Berhasil [200]
        ```json
        {
        "draw":1,
        "recordsTotal":1500,
        "recordsFiltered":1500,
        "data":[
            {
                "id":1,
                "country_code":1,
                "merchant_name":"Perum Palastri Tbk",
                "created_at":"2021-08-26 15:57:01"
            },
            {
                "id":2,
                "country_code":1,
                "merchant_name":"PD Laksita Pradipta",
                "created_at":"2021-08-26 15:57:01"
            },
            {
                "id":3,
                "country_code":1,
                "merchant_name":"PT Salahudin Yuliarti (Persero) Tbk",
                "created_at":"2021-08-26 15:57:01"
            },
            {
                "id":4,
                "country_code":1,
                "merchant_name":"PD Agustina (Persero) Tbk",
                "created_at":"2021-08-26 15:57:01"
            },
            {
                "id":5,
                "country_code":1,
                "merchant_name":"PD Kuswoyo Mandasari Tbk",
                "created_at":"2021-08-26 15:57:01"
            }
        ],
        "input":{
            "draw":"1",
            "start":"0",
            "length":"5"
        }
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    2. #### **Get Merchant**
        ##### Endpoint : [GET] /api/merchant/{id}
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        #####  Response berhasil [200]
        ```json
        {
            "id":  1,
            "country_code":  1,
            "merchant_name":  "Perum Palastri Tbk",
            "created_at":  "2021-08-26 15:57:01"
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    3. #### **Create Merchant**
        ##### Endpoint : [POST] /api/merchant
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        ##### Body Request
        ```json
        {
            "country_code"  :  1,
            "merchant_name"  :  "PT Lorem"
        }
        ```
        #####  Response berhasil [200]
        ```json
        {
            "status":  1
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    4. #### **Update Merchant**
        ##### Endpoint : [PUT] /api/merchant/{id}
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        ##### Body Request
        ```json
        {
            "country_code"  :  1,
            "merchant_name"  :  "PT Lorem"
        }
        ```
        #####  Response berhasil [200]
        ```json
        {
            "status":  1
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    5. #### **Delete Merchant**
        ##### Endpoint : [DELETE] /api/merchant/{id}
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```

        #####  Response berhasil [200]
        ```json
        {
            "status":  1
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```

    
3. ### Product
    Semua API untuk me-*manage* product
    1. **#### ALL Product**
        ##### Endpoint : [GET] /api/product
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        #####  Response Berhasil [200]
        ```json
        {
        "draw":1,
        "recordsTotal":15000,
        "recordsFiltered":15000,
        "data":[
            {
                "id":1,
                "name":"Barang 842",
                "merchant_id":1,
                "price":194363,
                "status":1,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":2,
                "name":"Barang 510",
                "merchant_id":1,
                "price":94928,
                "status":0,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":3,
                "name":"Barang 958",
                "merchant_id":1,
                "price":142373,
                "status":1,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":4,
                "name":"Barang 838",
                "merchant_id":1,
                "price":71434,
                "status":0,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":5,
                "name":"Barang 566",
                "merchant_id":1,
                "price":72304,
                "status":1,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":6,
                "name":"Barang 994",
                "merchant_id":1,
                "price":168569,
                "status":1,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":7,
                "name":"Barang 373",
                "merchant_id":1,
                "price":111735,
                "status":1,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":8,
                "name":"Barang 729",
                "merchant_id":1,
                "price":111055,
                "status":0,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":9,
                "name":"Barang 281",
                "merchant_id":1,
                "price":148998,
                "status":1,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            },
            {
                "id":10,
                "name":"Barang 606",
                "merchant_id":1,
                "price":109447,
                "status":0,
                "created_at":"2021-08-26 15:57:01",
                "merchant_name":"Perum Palastri Tbk"
            }
        ],
        "input":{
            "draw":"1",
            "start":"0",
            "length":"10"
        }
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    2. **#### Get Product**
        ##### Endpoint : [GET] /api/product/{id}
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        #####  Response berhasil [200]
        ```json
        {
        "id":1,
        "name":"Barang 842",
        "merchant_id":1,
        "price":194363,
        "status":1,
        "created_at":"2021-08-26 15:57:01",
        "merchant_name":"Perum Palastri Tbk"
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    3. **#### Create Product**
        ##### Endpoint : [POST] /api/product
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        ##### Body Request
        ```json
        {
        
            "name"  :  "Item lorem",
            "merchant_id"  :  1,
            "price"  :  100000,
            "status"  :  1
        }
        ```
        #####  Response berhasil [200]
        ```json
        {
            "status":  1
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    4. **#### Update Product**
        ##### Endpoint : [PUT] /api/product/{id}
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```
        ##### Body Request
        ```json
        {
        
            "name"  :  "Item lorem ipsum",
            "merchant_id"  :  1,
            "price"  :  100000,
            "status"  :  1
        }
        ```
        #####  Response berhasil [200]
        ```json
        {
            "status":  1
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```
    5. **#### Delete Product**
        ##### Endpoint : [DELETE] /api/product/{id}
        #####  Headers
        ```
        Authorization : Bearer {{token}}
        ```

        #####  Response berhasil [200]
        ```json
        {
            "status":  1
        }
        ```
        ##### Response gagal [401]
        ```json
        {
            "message":  "Unauthorized"
        }
        ```