# Create a detailed report for Assignment 2 on analyzing HTTP headers

report_content = """
# Assignment 2: Analyzing HTTP Headers

## Objective

The purpose of this assignment is to capture and analyze HTTP GET and POST requests using a network packet sniffer, such as **Wireshark**. In this report, we will explore the request and response headers, identify the MIME type of the response, and examine HTTP status codes.

---

## Tools Used

- **Wireshark**: A network protocol analyzer used for capturing and inspecting network packets.
- **Browser (Google Chrome/Firefox)**: Used to generate HTTP traffic.
- **Website**: A test website or API endpoint.

---

## Procedure

### Step 1: Capture HTTP Requests

1. **Install Wireshark**: Download and install **Wireshark** from [Wireshark website](https://www.wireshark.org/).
2. **Start Wireshark**: Launch the Wireshark application and begin capturing packets on the relevant network interface (Wi-Fi or Ethernet).
3. **Generate HTTP Traffic**:
   - Open the browser and visit a website (for example, `http://example.com`).
   - Perform actions such as navigating through the website or submitting a form (POST request).
4. **Filter HTTP Traffic**: Use Wireshark's display filter `http` to only show HTTP packets.
5. **Stop the capture** once enough HTTP GET and POST requests have been captured.

---

### Step 2: Capture HTTP GET and POST Requests

1. **HTTP GET Request**:
   - A typical HTTP GET request is generated when visiting a website or fetching resources (such as HTML, CSS, JavaScript, etc.).
   - For example, visiting `http://example.com` will generate a GET request for the homepage.

   Example GET Request:

---

### Step 3: Identifying Key Information

1. **Request and Response Headers**

**Request Headers**: These contain information sent by the client to the server, such as the HTTP method (GET or POST), host, user agent, and other metadata.

- **Example GET Request Headers**:
  ```
  GET / HTTP/1.1
  Host: example.com
  User-Agent: Mozilla/5.0 ...
  Accept-Encoding: gzip, deflate, br
  ```

- **Example POST Request Headers**:
  ```
  POST /submit_form HTTP/1.1
  Host: example.com
  Content-Type: application/x-www-form-urlencoded
  Content-Length: 33
  ```

**Response Headers**: These are sent by the server to the client and contain metadata such as the HTTP status code, content type, length of the response, and caching information.

- **Example Response Headers**:
  ```
  HTTP/1.1 200 OK
  Date: Sat, 01 Jan 2025 00:00:00 GMT
  Server: Apache/2.4.41 (Ubuntu)
  Content-Type: text/html; charset=UTF-8
  Content-Length: 1256
  ```

The request headers give information about the client’s request, and the response headers contain the server’s reply with status codes, content type, and more.

2. **MIME Type of the Response**

The MIME type (Multipurpose Internet Mail Extensions) defines the type of content being returned by the server. This information is provided in the **Content-Type** header.

- **Example Response MIME Types**:
  - `Content-Type: text/html; charset=UTF-8` → The response is HTML content.
  - `Content-Type: application/json` → The response is JSON data.
  - `Content-Type: image/png` → The response is an image.

MIME types are crucial for the browser or client to interpret the response correctly.

3. **HTTP Status Code and Explanation**

HTTP status codes indicate the status of the server’s response to a client request. These codes fall into five categories:

- **1xx** – Informational responses.
- **2xx** – Successful responses (e.g., 200 OK).
- **3xx** – Redirection responses (e.g., 301 Moved Permanently).
- **4xx** – Client error responses (e.g., 404 Not Found).
- **5xx** – Server error responses (e.g., 500 Internal Server Error).

- **Example HTTP Status Code**: 
  - `HTTP/1.1 200 OK` → The request was successful, and the server returned the requested data.
  - `HTTP/1.1 404 Not Found` → The requested resource could not be found on the server.
  - `HTTP/1.1 500 Internal Server Error` → The server encountered an error and could not complete the request.

**Explanation**:
- **200 OK**: Successful request.
- **404 Not Found**: The resource could not be found on the server.
- **500 Internal Server Error**: The server encountered an error processing the request.

---

## Screenshots and Data Collection

To complete the assignment, the following should be captured and included in the final submission:

1. **Wireshark Screenshot**: Capture a screenshot of the HTTP GET and POST requests, showing the request and response headers, as well as the status codes.
2. **Request and Response Data**: Provide samples of the captured requests and responses, with explanations for each part (headers, MIME type, status code, etc.).

### Example Screenshot: GET Request in Wireshark

*Insert Wireshark screenshot showing the captured HTTP GET request with headers and status code*

### Example Screenshot: POST Request in Wireshark

*Insert Wireshark screenshot showing the captured HTTP POST request with headers and status code*

---

## Conclusion

This assignment provided a hands-on approach to capturing and analyzing HTTP GET and POST requests using Wireshark. By examining the HTTP request and response headers, MIME types, and HTTP status codes, we gained insight into how web communication occurs between a client (browser) and a server. These elements are fundamental in understanding web traffic, improving security, and debugging network issues.

---

## Submission

- **Wireshark Capture File**: [Attach Wireshark capture file here]
- **Screenshots**: [Attach the screenshots of the GET and POST requests here]

"""
