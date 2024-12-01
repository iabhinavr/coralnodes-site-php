## Subresource Integrity

If you are loading Highlight.js via CDN you may wish to use [Subresource Integrity](https://developer.mozilla.org/en-US/docs/Web/Security/Subresource_Integrity) to guarantee that you are using a legimitate build of the library.

To do this you simply need to add the `integrity` attribute for each JavaScript file you download via CDN. These digests are used by the browser to confirm the files downloaded have not been modified.

```html
<script
  src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.10.0/highlight.min.js"
  integrity="sha384-pGqTJHE/m20W4oDrfxTVzOutpMhjK3uP/0lReY0Jq/KInpuJSXUnk4WAYbciCLqT"></script>
<!-- including any other grammars you might need to load -->
<script
  src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.10.0/languages/go.min.js"
  integrity="sha384-Mtb4EH3R9NMDME1sPQALOYR8KGqwrXAtmc6XGxDd0XaXB23irPKsuET0JjZt5utI"></script>
```

The full list of digests for every file can be found below.

### Digests

```
sha384-h+WRl4BTTVy31uw0ZuOybtJsEIlOq2Q4LSWUjK8gKrhdXEqYHP7Qu+MmBIZIqZtO /es/languages/apache.js
sha384-xuOg8cLlaKYVwu8KcJCX2nbs9mrVa7Ngz0c9NQiwViwl408M5TX3w1FC22RHhUuS /es/languages/apache.min.js
sha384-no5/zgQGupzPFGWV8VpJzfQau5/GI2v5b7I45l6nKc8gMOxzBHfgyxNdjQEnmW94 /es/languages/bash.js
sha384-u2nRnIxVxHkjnpxFScw/XgxNVuLz4dXXiT56xbp+Kk2b8AuStNgggHNpM9HO569A /es/languages/bash.min.js
sha384-qimhSkVWof5rfaFajQk8KAtzSRYyIArcJCMKWdDcNq34F4uplk08wmEyUiYLmO+3 /es/languages/c.js
sha384-5fESKgrRcGs7I/89bn7NKFcHyvIVcmQIG4JfCEAV5Rg5VVtskrmGkHVOIsD1642v /es/languages/c.min.js
sha384-eM9Op3b0ilZ/iW7jeVAMo//MKcEXHCbg1Vf8SMrqds5LIOeF9+3qaX//TsnbItae /es/languages/cpp.js
sha384-+tDHTmLKfBxXgVksRhLEJM4z9PfcGQ2XsrZMDcdJ1SIlPZrtAR4+m4XUX+zJf5nf /es/languages/cpp.min.js
sha384-+9dzNYaLHp3OPspFCOJGrEwfiOV3yqeD/atUDYVt9zKUJ8IW2QxffCT2LfmGfwfW /es/languages/css.js
sha384-G44u1/pUATC8754FIKYqkCxCl9AQYnspnFxzuR3RB1YVnTvqOEofqvZNQMUWcY/1 /es/languages/css.min.js
sha384-conFwWhJOaJ8yLyZJUeX6IlE3YGpdoxazLFVV//QB5E+ASXMVyFnQE1V6SfgMzEq /es/languages/dockerfile.js
sha384-Dw9HMdbM7eZULiZ40cTZJ0NU88GUU5VQ22H+PVZ0IzxPGdnPPqKdsg4Uk3D2wbCB /es/languages/dockerfile.min.js
sha384-U0cmcZmeG0JVcA3HKR6r7Sio0x8FtcXR7eviBCcgniMwCc+DMiV6IQPm7bFn6BPh /es/languages/go.js
sha384-5Mzx2XTmXU2XQ0AiQg/4HA9SbBDrPySZgpsOfSfflGdzC4bIpCjWSxIP62fOIFkO /es/languages/go.min.js
sha384-DmHzDhCE3ltNMxzvFexjBF+ku3PcoAMY7WFOXlWIZnV+vEiPek+T5FVXBuYELEAg /es/languages/graphql.js
sha384-y8dkUR8w2ApytztUtIg+27fJuiL5sH1oq9uRGEcpH9zcoYPU/ZFvroB77kwDE7d6 /es/languages/graphql.min.js
sha384-0StLGSBIhoerTxrjwG/Lx1LYO/qmSp2TzCqgzCmnBDrVmkkeaFW9vHKuLHK5Ue7H /es/languages/ini.js
sha384-Qk1583V3PAnmXJ00e8ufkLJOuIZIrqrg5sTGoghEOwikzdWrdpiJv8lQqrURXjBG /es/languages/ini.min.js
sha384-oQpcUGMBf+VDTHOLQ1uhPp1FgNBo0OZc9gbXGuVFwAogHlkh/Iw6cvKKgcgCQkmV /es/languages/javascript.js
sha384-3T8DJ91yCa1//uY9h8Bo4QLrgEtbz4ILN2x9kSM4QWX9/1kKu6UXC3RAbVQV85UQ /es/languages/javascript.min.js
sha384-R87hRh4kF8+iz2sB6FvLrfR0XZBohjFXeJKIXld1Eji2UVi+M2+OIgJKma/9Ko6u /es/languages/json.js
sha384-QFDPNpqtrgZCuAr70TZJFM4VCY+xNnyGKwJw2EsWIBJOVcWAns9PHcLzecyDVv+x /es/languages/json.min.js
sha384-JkFMmKMbHcXjdfHauRnREGG6i73GyMisdqNivBm4Z9m2Oc82YIu5jQtIjLa508e8 /es/languages/markdown.js
sha384-65/lNNIY+ayhHTtFznjnyZ5w2NDdZIpSEcqjss/p4ex5JamZ46FdYwDDf6IBLCmE /es/languages/markdown.min.js
sha384-WuxmFqZ8YXr3xyK1Salq5t1q46F/VyzVGx48M2ZJPhbodzQ9L8kfnP/0seU78NsC /es/languages/nginx.js
sha384-XOua+gbAwDawIeMkI2pkXOZH9Xxl9/XLoGuPJD5Bs3WS4bMn207o20s+aQtpsqqE /es/languages/nginx.min.js
sha384-BxojDi6ePBYN3unEc6aUEpUtUyx0Eq0i/UZPISuI2YQy6eAD5HzD0dtBC53uZ6R1 /es/languages/php.js
sha384-C28kAnknmyKQUME+2sa0tyQkFMN1S/aUSB1gQ+PKUf0+ewgxNh8CwAmd+C0UUaZ7 /es/languages/php.min.js
sha384-e+d8RFZbtc5Pmt3xfX9uuElm63v5qOj7T5hAkkFbnYc1wEk7wCLlzOsm66MCf5Uk /es/languages/python.js
sha384-CPHh+9FxkWF3OtMZdTj5oQN1Qti0p4/5XBABz/JdgssOKHmfAOFz6Gu4tsG6MQiH /es/languages/python.min.js
sha384-ZX3mm6sjLYWMBTMUJYzvQXYHNWVJkD+t1ppx4BysyVs6cVhvYFVuwMlVCeAwtwm9 /es/languages/sql.js
sha384-DloKeCkj/pTPHeqWu3keGoEPpZJGm44yQjSmSfpWasykAMUobM0hcYFFPsg1PE6K /es/languages/sql.min.js
sha384-BcyijKQAe0oJGoEBf0y/+dTJjKiy4bIAVdjreJw+MiOkPgCEjM/2FY2+W7K6tcEZ /es/languages/typescript.js
sha384-Mfjt0R07QBpLXhGWeCetLw7s2mTQSoXmcyYnfsSNq4V4YG3FwayBjxod9MxjSB1x /es/languages/typescript.min.js
sha384-TOvJ6ng9+2cEdYIo8UmcklrWBDxDmcyIc8eZ9tntvTcornli0usS+D1YJKmhMdU5 /es/languages/wasm.js
sha384-tu9x6stUNSb4pXeVRKavZtTp8ha5aQOjCp464ykdPSuI1BMHmN/07U/iqeaoKLgE /es/languages/wasm.min.js
sha384-Tdx2DY9ZTHx3KhVXYqOVKx3q1zOboDGlTTv8sgMlER8y4WETtqL+C4VQ7B4A0OGq /es/languages/xml.js
sha384-n9ZezaAVj8pK1BIFZQxmC1BM9yGuBNRgvsOxHMHPCXzqYd1gSYIu9KjgGEm8K57w /es/languages/xml.min.js
sha384-40MP6/ECSjYaTAIf+/ibE2FPeFPQ53WbASndXxMOcXiQtgLbGXUStZVuPSngp7OD /es/languages/yaml.js
sha384-vXmhozexi2dHQBoniIEbWI5ZqDxyVfUs96BUGpqjWL1aberSp9pyxbvK8WCNASGB /es/languages/yaml.min.js
sha384-CmG/xb1duBmVNCw0Yr7ww0kOxeBU5qY03kVsiLfTX1HDDVs4NiWAL+mx88jxBtao /languages/apache.js
sha384-iUQ9BcUA+p4w9sZAfo8E9iui0Ay0KwBSTIkTLZB8yc3+ExNWmxWMYMLxB1Q1NOZt /languages/apache.min.js
sha384-4SbTAv3AX2fuPCpSv6HW3p07YgA7hFfcwG2zJHtYv0ATIt1juD3IXj2NSYwTeIpm /languages/bash.js
sha384-83HvQQdGTWqnRLmgm19NjCb1+/awKJGytUX9sm3HJb2ddZ9Fs1Bst2bZogFjt9rr /languages/bash.min.js
sha384-WHdxyD51Y+ytDdcYGVkKHQOThUwwhLl/1GvZxHTHL4ImI4NS32L/B8bvB/1zN/Mk /languages/c.js
sha384-jtwnwOYA+K4zYN55fA4z4U0PTK5oEp4RcLYaXkYRKO3UUzge1o21ArmvKmTRdh/d /languages/c.min.js
sha384-M2wpTxQe2N0750xYZ0zTinwbmjsZjdtuS7twUUP2dxtHR0YqhY3JuUFyyhANf9Uy /languages/cpp.js
sha384-/yf54L01PbO6NtVs1Pu9rgfNHbKXanLdNcGVuNa0m5+KiyH+1NpZRDK6idm5VoVl /languages/cpp.min.js
sha384-h6xPJgkyvp13tIs697wZHjCH20tW1aJOrvnAKiZZiATSWZp0lyLB4bAdsEhWUSze /languages/css.js
sha384-+MO3D3y/aZzZq7QMAAA5KiuAcqBZivJHFmVUXfwdBoLxEXeGTeQGsNMll4fpnegg /languages/css.min.js
sha384-KgZWfCUcAWOSNTSNOBUrbGToPbSNE30TSimcL9oKDQ35EApOQoCYU4o2ayix5Ohe /languages/dockerfile.js
sha384-jg4vR4ePpACdBVLAe+31BrI3MW4sfv1AS62HlXRXmQWk2q98yJqKR5VxHzuABw8X /languages/dockerfile.min.js
sha384-B9Y0sXbhPrwdlpzfeFn4NkyJrhYEUFUCTMrEVRu+d2/3aJ/4ZOjFPJRZFnJdaQJm /languages/go.js
sha384-Mtb4EH3R9NMDME1sPQALOYR8KGqwrXAtmc6XGxDd0XaXB23irPKsuET0JjZt5utI /languages/go.min.js
sha384-y4jAHac6QZpx9l3FE/Q9CbTHzEhF8S7+9Hm8AY4PfpSCmQWpPCdW1rBh63nXebrT /languages/graphql.js
sha384-2vKrGN0+i0vPRkMvpEZkOgi35/Vyn5pGG9Oi+baBPODVLjCrGyhQpwDG+BBEEeA3 /languages/graphql.min.js
sha384-l2Aa/1StxIePW3t8ALFDwO/VZShzdfn5Y+0qIFkvO4WXem4DA5+6fgKQW+w/xKEk /languages/ini.js
sha384-0/1VV9gfjl+ZuUf+R7fvp6dQlJ5JVh+WzEqjzOwd+PCh8fa104Vm13MBaJjTz+cG /languages/ini.min.js
sha384-p/utwvqrRVOLlz0BjJ0BCGCb2liTDipfz47/QmGXz9hoPIjCKYEgmYUC30VmGgZy /languages/javascript.js
sha384-L/XmDiyusXomLRGcRmcBpPlboRFjpQNV747OJvg+sEOpgGYvUsNwcC4JLNQ2dI6O /languages/javascript.min.js
sha384-psmmPlbfEWGyvRapexDqkVTgNz7Y1xvlGdLNWQSafI4GFQYFDXPZxVXH1laU4n6l /languages/json.js
sha384-Bb6DhE3tUpBROwypL78TbhRUs9QbCt2GxcxVSYglt2l3MefrYkm4CfwjfWhRfQaX /languages/json.min.js
sha384-TVvUXbmPgdS59xZSFUeyNQ1vUkeCbBpuMj3qlzdEwdQhoO5F/WNdI94UEw8g7Enp /languages/markdown.js
sha384-sFh+6oaRBb6kdaMLf8x7qeH7NTvm2u1Ta6PtI0S8hoA+bP7UtHCyKFzaI1JBXwhT /languages/markdown.min.js
sha384-GqxuhQ5X9X3c8nNswtucj7gX9fAuYCtI73NbFLXAYNqX39+zocekxv7SOK6oVGhi /languages/nginx.js
sha384-TG8jUbt29ktiHxVaCkA6FLnJkL/PYG3zQwEYexdbr+Z6mMkFf+c0ONpHyuIY4vvG /languages/nginx.min.js
sha384-swGDgtGOmzrsbFAaQRjzvGs0hhe0N86mfHIuisr3W9AT0hiheGyRORSGrbMDGOw5 /languages/php.js
sha384-Xd0AQIkWCEjBL8BNMtDMGVqFXkf445J6PNUJdXbh334ckjeSa90wtSUjXySuz+rt /languages/php.min.js
sha384-WNah6F2QDUbmrNCi0fSEyKJbSb01S1ijnoiwbDnegW7dm2Cz/H1CiH1HhWlUvj01 /languages/python.js
sha384-YDj7s2Wf0QEwarV3OB8lvoNJJCH032vOLMDo2HDrYiEpQ+QmKN+e++x3hElX5S+w /languages/python.min.js
sha384-w/OmtgUvmlKWaVatpcvuEQxP7bkJzI5gLeeQkuXjApJNiQvNmXFL2PBM5RWgKqDr /languages/sql.js
sha384-2uzCjI3OPwJce6i2hphsYs1qqTqRrDnfPXbfjZggPWy2/Lgl8gzV9Hyl0jhhoWy4 /languages/sql.min.js
sha384-4q0Mj1AHSvVdgi6nXDGdkiHZQcme/PcCE+MvwCvnAIZSjhJfk3UpjJU2nn2eImWz /languages/typescript.js
sha384-rfwxAwuWzb2XdSU7HN3IhrSyCq96Nj4p1ZYPCNAGbqtnPsaWl8d5eSypxPbW6alT /languages/typescript.min.js
sha384-7+RHZQJsgiohPfYs4xGnVLR6bKm1cnz7rvB7mXEb2btmiWhSNq1cuTJsQWK9Ut8w /languages/wasm.js
sha384-TTxGby06lDIEB1Y6l2/Hd2VJbewWQSCESXUcDWC24gJN0IiptruI6DE1l5+w4Qzh /languages/wasm.min.js
sha384-QAL2h4IMgQaJUJjUy0dSWdAut7o/A272ai8qOsJ8SSm9KMxkdLgH7oGfLGft/EJ0 /languages/xml.js
sha384-CN3No+n1UZXCFYyl+ge5yAPGTNGuH23BdIsFJxntDmEYL94AmoZlNBHGSdjVSjKG /languages/xml.min.js
sha384-3KIoWvJ5JGRH35WAkzreEebY8sug+ZWeaOPS2r1KIfznEU9TtPFpxX6sIgtaiA9G /languages/yaml.js
sha384-bMkvdnz+wPu1ro0fqO3BaDWztc7RzSvw05MQFP6bhJKDcwpkrFYTfTFI9ndkP11l /languages/yaml.min.js
sha384-+M5pOusIm3z1XYivGnf42fAgAMyRtK75l9TiusH0p1rqV1vCYYxLkZ1aYlIlkdb5 /highlight.js
sha384-eW/92oCYONwdqd8W6l/IBE+OJ+BI1Mq7LQTfrQjXKUM/9m3SsRmwmDEwSgwptaAr /highlight.min.js
```

