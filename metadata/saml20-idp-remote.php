<?php
$metadata['http://localhost/simplesaml'] = [
    'SingleSignOnService'  => 'http://localhost/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService'  => 'http://localhost/simplesaml/saml2/idp/SingleLogoutService.php',
    'certificate'          => 'localhost.pem',
];


$metadata['https://app.onelogin.com/saml/metadata/6b4fc6b8-af8e-45ab-b93e-435d85d1d3d7'] = array (
    'entityid' => 'https://app.onelogin.com/saml/metadata/6b4fc6b8-af8e-45ab-b93e-435d85d1d3d7',
    'contacts' =>
        array (
        ),
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://signnoweloper-dev.onelogin.com/trust/saml2/http-redirect/sso/6b4fc6b8-af8e-45ab-b93e-435d85d1d3d7',
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://signnoweloper-dev.onelogin.com/trust/saml2/http-post/sso/6b4fc6b8-af8e-45ab-b93e-435d85d1d3d7',
                ),
            2 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                    'Location' => 'https://signnoweloper-dev.onelogin.com/trust/saml2/soap/sso/6b4fc6b8-af8e-45ab-b93e-435d85d1d3d7',
                ),
        ),
    'SingleLogoutService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://signnoweloper-dev.onelogin.com/trust/saml2/http-redirect/slo/1121517',
                ),
        ),
    'ArtifactResolutionService' =>
        array (
        ),
    'NameIDFormats' =>
        array (
            0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
        ),
    'keys' =>
        array (
            0 =>
                array (
                    'encryption' => false,
                    'signing' => true,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIID3DCCAsSgAwIBAgIUe0mowmIGFHf1HofwWfDtksjUNpMwDQYJKoZIhvcNAQEF
BQAwRTEQMA4GA1UECgwHU2lnbm5vdzEVMBMGA1UECwwMT25lTG9naW4gSWRQMRow
GAYDVQQDDBFPbmVMb2dpbiBBY2NvdW50IDAeFw0yMDA0MTUxOTQ0MjRaFw0yNTA0
MTUxOTQ0MjRaMEUxEDAOBgNVBAoMB1NpZ25ub3cxFTATBgNVBAsMDE9uZUxvZ2lu
IElkUDEaMBgGA1UEAwwRT25lTG9naW4gQWNjb3VudCAwggEiMA0GCSqGSIb3DQEB
AQUAA4IBDwAwggEKAoIBAQDB/o5BWBiU8goQEkSwj2UoGbcr8jZFDVgYGAs59OnE
Dx+ks9B291MrHr8Krs2JQAUVwHLK/6qtJgQ8ce0CnTuWN393wT+bvUeQD8PufdcB
Prg3xFW/lox9eIY04FCITPLPnCJAZvzcRo8xmYV37oV8k0qW3yuN1uPynYBVesD0
Cw02qDLeLihQpthwxmjjOgFwh1EIkQAS873nHm489gKclxJgYDckFXoTGGIHhN06
SbrX1iH5O5j0fURiwM7csSGsiF4/Kr6xh8jEyPWl68ySnWRjs//yXDxDezetV/nr
1U2x+KZUJENXi96r91yZNWxxGwa3XV9rBp1rYQOnsyiFAgMBAAGjgcMwgcAwDAYD
VR0TAQH/BAIwADAdBgNVHQ4EFgQU9agqamXsyET7JmU5IUGUqQCX5PAwgYAGA1Ud
IwR5MHeAFPWoKmpl7MhE+yZlOSFBlKkAl+TwoUmkRzBFMRAwDgYDVQQKDAdTaWdu
bm93MRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFj
Y291bnQgghR7SajCYgYUd/Ueh/BZ8O2SyNQ2kzAOBgNVHQ8BAf8EBAMCB4AwDQYJ
KoZIhvcNAQEFBQADggEBAA+JbQXjyalvOaLNykrqJ8xdXipnHQR9EkMiT0IeYv4Z
Oo8KkvVBU8m0vmJit/wdFyaGcFdA7usJ+uiUd50bssDc+cCMwmNHgUTdrcylbtph
Wa2BTKQBVXcAtbm/mrA8noUCmwnh+z2q35brwmtfQ72DPIxGkOZ4EoV+QCCsYWLd
aicVKbOZMj3Dtr6mGw6w5UtgEyDORPp2KcXLXPqm3pKmZHF3Ky+nfpnfCPH/RNiN
w0V3WXp5gy5eJ2jR8TUT4Fu2xXXj+t5qkCMXrr1VBdpKKtE/Nwz580roef+rJrsV
BZPR57TXIMmavvuBBnD44hfJFcuLAxMniXW+IvrkOPk=',
                ),
        ),
);


$metadata['http://www.okta.com/exk961za9BEMXPsBE4x6'] = array (
    'entityid' => 'http://www.okta.com/exk961za9BEMXPsBE4x6',
    'contacts' =>
        array (
        ),
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://dev-938266.okta.com/app/airslatedev938266_testsamlconnector_1/exk961za9BEMXPsBE4x6/sso/saml',
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://dev-938266.okta.com/app/airslatedev938266_testsamlconnector_1/exk961za9BEMXPsBE4x6/sso/saml',
                ),
        ),
    'SingleLogoutService' =>
        array (
        ),
    'ArtifactResolutionService' =>
        array (
        ),
    'NameIDFormats' =>
        array (
            0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
            1 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
        ),
    'keys' =>
        array (
            0 =>
                array (
                    'encryption' => false,
                    'signing' => true,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIIDpDCCAoygAwIBAgIGAXGCZoC6MA0GCSqGSIb3DQEBCwUAMIGSMQswCQYDVQQGEwJVUzETMBEG
A1UECAwKQ2FsaWZvcm5pYTEWMBQGA1UEBwwNU2FuIEZyYW5jaXNjbzENMAsGA1UECgwET2t0YTEU
MBIGA1UECwwLU1NPUHJvdmlkZXIxEzARBgNVBAMMCmRldi05MzgyNjYxHDAaBgkqhkiG9w0BCQEW
DWluZm9Ab2t0YS5jb20wHhcNMjAwNDE2MDk1MDI3WhcNMzAwNDE2MDk1MTI3WjCBkjELMAkGA1UE
BhMCVVMxEzARBgNVBAgMCkNhbGlmb3JuaWExFjAUBgNVBAcMDVNhbiBGcmFuY2lzY28xDTALBgNV
BAoMBE9rdGExFDASBgNVBAsMC1NTT1Byb3ZpZGVyMRMwEQYDVQQDDApkZXYtOTM4MjY2MRwwGgYJ
KoZIhvcNAQkBFg1pbmZvQG9rdGEuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA
snUEoq/gSgIw8ehbnlcUAnh/bTV6T6JhyPB9UKhuwPUV+mDW8ow7K0OSk0CnKckjHlsOy6ZNG25y
bwBFLtRJXu4seiZgqVJG+g21iM1b+X+ENZrzxIKUrEhAY9jGhIxxl/ivhchy/0EkC1koMPeWlMFS
E9rpMC7lCHkhXqVNhhqyfQnlnU2HnB31hAmtYKrchUfSomX/nFgPAruKaMK+Rbqfdd45Aba2FSaQ
0HPu1bpa+aLEoNBis++tCU/3Tem4Hfp6ObcUeFAUyRd+ak7nqik3kPaNuN8bk6l9/Hk9xAvFAJqV
qjxeh6J9wj8rrLQXo+QALcVvjYD61J/Je/nwvQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQAzV3ej
D6bOfqoa8UC0FdPdNcahu/GvZ4MV0CMLBEfcREA8Rj7i11TQtnjODExh/ZuMWJOyt1m+fULTvhyK
yquHgz+aEOTws1w2ok4nsXAHhXl6wTA9OAF7NtnH0+AEtijR+dytOX/pGMS1T7NC/Sg3o03EIfGA
2d2J7gRfEmUoSX5/3EYbQ8b2FVYHgqS2fEhkfvz4W3cmJwipWtvalJlvp1YAEPfR+AcRVfBmJ9rC
Wi1LQJJzrcoWPS0sPiBXNjLwSB9yWIV0Nekk7VG27ww2vAHAIjHIo6BHJuYGq77Z1x69piE5LLdj
uFI/IAdngBX/rrSQwczJlU9Xx/L+gQTp',
                ),
        ),
);
