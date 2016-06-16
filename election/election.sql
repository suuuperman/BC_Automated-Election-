impl" uri="http://www.netbeans.org/ns/j2se-project/3">
            <attribute default="${main.class}" name="testClass"/>
            <attribute default="" name="testMethod"/>
            <element implicit="true" name="customize2" optional="true"/>
            <sequential>
                <j2seproject3:testng-debug testClass="@{testClass}" testMethod="@{testMethod}">
                    <customize2/>
                </j2seproject3:testng-debug>
            </sequential>
        </macrodef>
    </target>
    <target depends="-init-macrodef-junit-debug-impl" if="${junit.available}" name="-init-macrodef-test-debug-junit">
        <macrodef name="test-debug" uri="http://www.netbeans.org/ns/j2se-project/3">
            <attribute default="${includes}" name="includes"/>
            <attribute default="${excludes}" name="excludes"/>
            <attribute default="**" name="testincludes"/>
            <attribute default="" name="testmethods"/>
            <attribute default="${main.class}" name="testClass"/>
            <attribute default="" name="testMethod"/>
            <sequential>
                <j2seproject3:test-debug-impl excludes="@{excludes}" includes="@{includes}" testincludes="@{testincludes}" testmethods="@{testmethods}">
                    <customize>
                        <classpath>
                            <path path="${run.test.classpath}"/>
                        </classpath>
                        <jvmarg line="${endorsed.classpath.cmd.line.arg}"/>
                        <jvmarg line="${run.jvmargs}"/>
                        <jvmarg line="${run.jvmargs.ide}"/>
                    </customize>
                </j2seproject3:test-debug-impl>
            </sequential>
        </macrodef>
    </target>
    <target depends="-init-macrodef-testng-debug-impl" if="${testng.available}" name="-init-macrodef-test-debug-testng">
        <macrodef name="test-debug" uri="http://www.netbeans.org/ns/j2se-project/3">
            <attribute default="${includes}" name="includes"/>
            <attribute default="${excludes}" name="excludes"/>
            <attribute default="**" name="testincludes"/>
            <attribute default="" name="testmethods"/>
            <attribute default="${main.class}" name="testClass"/>
            <attribute default="" name="testMethod"/>
            <sequential>
                <j2seproject3:testng-debug-impl testClass="@{testClass}" testMethod="@{testMethod}">
                    <customize2>
                        <syspropertyset>
                            <propertyref prefix="test-sys-prop."/>
                            <mapper from="test-sys-prop.*" to="*" type="glob"/>
                        </syspropertyset>
                    </customize2>
                </j2seproject3:testng-debug-impl>
            </sequential>
        </macrodef>
    </target>
    <target depends="-init-macrodef-test-debug-junit,-init-macrodef-test-debug-testng" name="-init-macrodef-test-debug"/>
    <!--
                pre NB7.2 profiling section; consider it deprecated
        